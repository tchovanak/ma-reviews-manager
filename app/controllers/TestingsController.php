<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestingsController extends BaseController {

	public function displayReviews()
	{
		$portals = Portal::lists('label','id');
		$reds = Redactor::all();
		$redsContacts = new Collection();
		foreach($reds as $red){
			$redsContacts->addItem("{$red->contact->first_name} {$red->contact->last_name}" ,$red->id);
		}
		$companies = Company::lists('label','id');
		$device_types = DeviceType::lists('label','id');
		return View::make('reviews')->with('portals',$portals)->with('redsContacts',$redsContacts->items())->with('companies',$companies)->with('device_types',$device_types);
	}

	/**
     * Validate and store a new device testing record.
     *
     * @param  Request  $request
     * @return Response
     */
	public function add()
	{
		$actDate = date('d/m/Y');
		$validator = Validator::make(Input::all(), array(
			'portal' => 'required',
			'redactor' => 'required',
			'received_date' => 'required|before:'.$actDate,
			'planned_publish_date' =>'required')
		);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		$testing = new DeviceTesting;
		$portal = Portal::find(Input::get('portal'));
		$redactor = Redactor::find(Input::get('redactor'));
		/*$device = Device::find(Input::get('device'*/
		$testing->received_date = Input::get('received_date');
		$testing->planned_publish_date = Input::get('planned_publish_date');
		$testing->id_portal = $portal->id;
		$testing->id_redactor = $redactor->id;
		$testing->save();
		return Redirect::back()->with('confirmation_code',1);
	}

}