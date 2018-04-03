<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function Question()
    {
        return $this->belongsTo(Question::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Likes()
    {
        return $this->hasMany(Like::class);
    }

}

