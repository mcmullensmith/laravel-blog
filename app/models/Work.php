<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Work extends \Eloquent implements SluggableInterface {

	// Add your validation rules here
	public static $rules = [
		 'title' => 'required',
		 'body' => 'required',
         'thumbnail' => 'required'
	];

	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'title',
		'save_to'    => 'slug',
	);

	// Don't forget to fill this array
	protected $fillable = ['title', 'body'];

	public function image(){
		return $this->hasMany('Image');
	}

	public function tags() {
		return $this->belongsToMany('Tag');
	}



}
