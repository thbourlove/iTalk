<?php

class Logout extends \BaseController
{
    public function get()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
