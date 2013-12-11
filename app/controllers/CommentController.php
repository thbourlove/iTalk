<?php

class CommentController extends \BaseController
{
    public function create()
    {
        if (Auth::check()) {
            return View::make('comments.create');
        } else {
            return Redirect::to('/login');
        }
    }

    public function store()
    {
        if (Auth::check()) {
            Comment::store(Input::get('post'), Input::get('comment', 0), Input::get('text'));
            return Redirect::to('/post/'.Input::get('post'));
        } else {
            return Redirect::to('/login');
        }
    }
}
