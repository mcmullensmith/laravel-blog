<?php

class Tag extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name'];

	public function posts() {
		return $this->belongsToMany('Post');
	}

	public function works() {
		return $this->belongsToMany('Work');
	}

}
