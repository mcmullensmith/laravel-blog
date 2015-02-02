<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends \Eloquent implements SluggableInterface {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required|between:3,255',
		'body' => 'required',
		'user_id' => 'integer'
	];

	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'title',
		'save_to'    => 'slug',
	);

	// Don't forget to fill this array
	protected $fillable = ['title', 'body', 'user_id'];

	public function user(){
		return $this->belongsTo('User');
	}

	public function tags() {
		return $this->belongsToMany('Tag');
	}

}
