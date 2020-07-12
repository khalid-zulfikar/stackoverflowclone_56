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
    public function user(){
        return $this->belongsTo(User::class);
    }
    


    
   

}

