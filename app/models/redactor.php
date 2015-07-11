<?php

class Redactor extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = array('id_contact');
	protected $table = 'redactor';
	public $timestamps = false;
	
	public function contact()
    {
        return $this->belongsTo('Contact','id_contact');
    }

}