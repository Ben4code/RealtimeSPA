<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function Question()
    {
        return $this->hasMany(Question::class);
    }
}
