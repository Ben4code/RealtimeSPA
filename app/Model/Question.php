<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
