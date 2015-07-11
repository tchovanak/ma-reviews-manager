<?php

class Contact extends Eloquent {

	protected $fillable = array('first_name','last_name','contact_phone','contact_email');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contact';
	public $timestamps = false;

}