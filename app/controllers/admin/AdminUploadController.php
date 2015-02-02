<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mattsmith
 * Date: 1/13/15
 * Time: 3:33 PM
 */

class AdminUploadController extends \BaseController {
    public function postImage()
    {
        $file = Input::file('file'); // your file upload input field in the form should be named 'file'

        $destinationPath = 'uploads/'.str_random(8);
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('file')->move($destinationPath, $filename);

        if( $uploadSuccess ) {
            return Response::json('success', 200); // or do a redirect with some message that file was uploaded
        } else {
            return Response::json('error', 400);
        }
    }
}