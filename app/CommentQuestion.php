<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentQuestion extends Model
{
    //
    protected $guarded = [];

    public function commentquest()
    {
        return $this->belongsTo('App\Quest');
    }
    public function commentuser(){
        return $this->belongsTo(User::class);
    }

}
