<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    //
    protected $guarded = [];
    public function comments()
    {
        return $this->hasMany('App\CommentQuestion');
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    


    
   

}

