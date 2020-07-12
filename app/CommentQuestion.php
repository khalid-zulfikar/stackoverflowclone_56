<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentQuestion extends Model
{
    //
    protected $guarded = [];

    public function replies()
    {
        return $this->hasMany(CommentQuestion::class, 'parent_id');

    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
