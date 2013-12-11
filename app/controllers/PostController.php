<?php

class PostController extends \BaseController
{
    public function index()
    {
        $posts = Post::all()->take(20);
        return View::make('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        if (Auth::check()) {
            return View::make('posts.create');
        } else {
            return Redirect::to('/login');
        }
    }

    public function store()
    {
        if (Auth::check()) {
            return Redirect::to('/post/'.Post::store(Input::get('title'), Input::get('content')));
        } else {
            return Redirect::to('/login');
        }
    }

    public function show($id)
    {
        $post = Post::find($id);
        return View::make('posts.show')->with('post', $post);
    }
}
