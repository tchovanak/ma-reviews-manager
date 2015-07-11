<?php

class DeviceTesting extends Eloquent {



	protected $fillable = array('received_date','planned_publish_date','published_date', 'transportations_num');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'device_testing';
	public $timestamps = false;
	
	public function portal()
    {
        return $this->belongsTo('Portal','id_portal');
    }

}