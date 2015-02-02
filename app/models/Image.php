<?php

class Image extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required|between:3,255',
		'image' => 'required',
		'work_id' => 'integer'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'image', 'work_id', 'description'];

	public function work(){
		return $this->belongsTo('Work');
	}

}