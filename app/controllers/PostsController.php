<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mattsmith
 * Date: 1/12/15
 * Time: 8:38 PM
 */

class PostsController extends \BaseController {
    public function getIndex(){
//        $posts =  Post::with('user')->get();
        return View::make('posts.index', [
            'posts' => Post::paginate(4)
        ]);
    }
    public function getpost($id){

        if(is_numeric($id)){
            $post  = Post::find($id);
        }else{
            $post = Post::where('slug','=',$id)->firstOrFail();
        }
        return View::make('posts.post', compact('post'));
//        $post = Post::where('slug', '=', $slug)->get();
//        return View::make('posts.post', compact('post'));
    }
}
