<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'content');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public static function store($title, $content)
    {
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->is_valid = true;
        $post->user_id = Auth::user()->id;
        $post->save();
        return $post->id;
    }
}
