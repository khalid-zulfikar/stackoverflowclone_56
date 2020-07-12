<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    //
    protected $guarded = [];
    public function comments()
    {
        return $this->morphMany(CommentQuestion::class, 'commentable')->whereNull('parent_id');
    }
    public function allcomments()
    {
        return $this->morphMany(CommentQuestion::class, 'commentable');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function likecomment(){
        return $this->hasMany(Commentquestion_Like::class);
    }
    


    
   

}

