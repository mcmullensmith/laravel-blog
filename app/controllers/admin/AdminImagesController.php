<?php

class AdminImagesController extends \BaseController {

	/**
	 * Display a listing of images
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Image::all();

		return View::make('admin.images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new image
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.images.create');
	}

	/**
	 * Store a newly created image in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Image::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$destinationPath = '';
		$filename        = '';
		$thumbPath = '';

		$image = new Image;
		$image->work_id = Input::get('work_id');
		$image->title = Input::get('title');
		$image->description = Input::get('description');

		if (Input::hasFile('image')) {
			$file            = Input::file('image');
			$destinationPath = public_path() . '/images/';
			$thumbPath = public_path() . '/images/thumbs/';
			$thumb = Photo::make($file);
			$thumb->resize(150, null, function ($constraint) {
				$constraint->aspectRatio();
			});
			$filename        = str_random(6) . '_' . $file->getClientOriginalName();
			$thumb->save($thumbPath . $filename);
			$file->move($destinationPath, $filename);

			$image->image = $filename;
			$image->thumbnail = $filename;

		}

		$image->save();

		return Redirect::route('admin.images.index');
	}

	/**
	 * Display the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$image = Image::findOrFail($id);

		return View::make('admin.images.show', compact('image'));
	}

	/**
	 * Show the form for editing the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = Image::find($id);

		return View::make('admin.images.edit', compact('image'));
	}

	/**
	 * Update the specified image in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$image = Image::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Image::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$image->update($data);

		return Redirect::route('admin.images.index');
	}

	/**
	 * Remove the specified image from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Image::destroy($id);

		return Redirect::route('admin.images.index');
	}

}
