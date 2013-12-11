<?php

class Login extends \BaseController
{
    public function get()
    {
        return View::make('users.login');
    }

    public function post()
    {
        return User::login(Input::get('name'), Input::get('password')) ? Redirect::to('/') : Redirect::to('/login');
    }
}
