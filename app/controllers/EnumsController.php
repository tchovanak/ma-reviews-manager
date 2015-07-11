<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnumsController extends BaseController {

	public function getIndex()
	{
		$portals = Portal::all();
		return View::make('enums')->with('portals',$portals);
	}
	
	public function addPortal()
	{
		$portal = new Portal(); 
		$portal->label = Input::get('label');
		$portal->save();
		return Redirect::back();
	}
	
	public function updatePortal($id)
	{
		$portals = Portal::all();
		return Redirect::back();
	}
	
	public function deletePortal($id)
	{
		$portal = Portal::find($id);
		echo $portal;
	}

}