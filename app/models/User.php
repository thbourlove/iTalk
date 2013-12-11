<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    protected $table = 'users';

    protected $hidden = array('password');

    protected $fillable = array('name', 'password', 'email');

    public static function register($name, $email, $password)
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
    }

    public static function login($name, $password)
    {
        return Auth::attempt(array('name' => $name, 'password' => $password), true);
    }

    public function getAvatar()
    {
        return 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email))).
            '?d='.urlencode('http://www.gravatar.com/avatar/b3d58b047bb71675ae0fffbb48ef69e9');
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getReminderEmail()
    {
        return $this->email;
    }
}
