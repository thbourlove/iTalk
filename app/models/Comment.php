<?php

class Comment extends Eloquent
{
    protected $table = 'comments';

    protected $fillable = array('text');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function post()
    {
        return $this->belongsTo('Post');
    }

    public static function store($postId, $commentId, $text)
    {
        $comment = new Comment();
        $comment->post_id = $postId;
        $comment->comment_id = $commentId;
        $comment->text = $text;
        $comment->is_valid = true;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return $comment->id;
    }
}
