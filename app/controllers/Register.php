<?php

class Register extends \BaseController
{
    public function get()
    {
        return View::make('users.register');
    }

    public function post()
    {
        User::register(Input::get('name'), Input::get('email'), Input::get('password'));
        return Redirect::to('/');
    }
}
