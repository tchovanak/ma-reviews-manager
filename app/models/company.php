<?php

class Company extends Eloquent {

	protected $fillable = array('label');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'company';
	public $timestamps = false;

}