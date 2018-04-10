<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //Added by me
    public function Reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
