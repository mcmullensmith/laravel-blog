<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mattsmith
 * Date: 1/13/15
 * Time: 11:23 AM
 */

class WorksController extends \BaseController {
    public function getIndex(){
//        $works =  Work::all();
        return View::make('works.index', [
            'works' => Work::paginate(4)
        ]);
    }
    public function getpost($id){
        if(is_numeric($id)){
            $work  = Work::find($id);
        }else{
            $work = Work::where('slug','=',$id)->firstOrFail();
        }
        return View::make('works.work', compact('work'));
    }
}
