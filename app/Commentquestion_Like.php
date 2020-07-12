<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentquestion_Like extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->belongsTo(CommentQuestion::class);

    }

}
