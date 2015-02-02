<?php

class AdminWorksController extends \BaseController {

	/**
	 * Display a listing of works
	 *
	 * @return Response
	 */
	public function index()
	{
		$works = Work::all();

		return View::make('admin.works.index', compact('works'));
	}

	/**
	 * Show the form for creating a new work
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.works.create');
	}

	/**
	 * Store a newly created work in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Work::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $destinationPath = '';
        $filename        = '';
        $thumbPath = '';

        $work = new Work;
        $work->title = Input::get('title');
        $work->body = Input::get('body');

        if (Input::hasFile('thumbnail')) {
            $file            = Input::file('thumbnail');
            $thumbPath = public_path() . '/images/thumbs/';
            $thumb = Photo::make($file);
            $thumb->resize(420, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $thumb->save($thumbPath . $filename);

            $work->thumbnail = $filename;

        }

        $work->save();

//		Work::create($data);

		return Redirect::route('admin.works.index');
	}

	/**
	 * Display the specified work.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$work = Work::findOrFail($id);

		return View::make('admin.works.show', compact('work'));
	}

	/**
	 * Show the form for editing the specified work.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$work = Work::find($id);

		return View::make('admin.works.edit', compact('work'));
	}

	/**
	 * Update the specified work in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$work = Work::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Work::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $destinationPath = '';
        $filename        = '';
        $thumbPath = '';

        if (Input::hasFile('thumbnail')) {
            $file            = Input::file('thumbnail');
            $thumbPath = public_path() . '/images/thumbs/';
            $thumb = Photo::make($file);
            $thumb->resize(420, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $thumb->save($thumbPath . $filename);

            $work->thumbnail = $filename;
            $work->save();
            $work->update(Input::except('thumbnail'));
        }



//		$work->update($data);

		return Redirect::route('admin.works.index');
	}

	/**
	 * Remove the specified work from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Work::destroy($id);

		return Redirect::route('admin.works.index');
	}

}
