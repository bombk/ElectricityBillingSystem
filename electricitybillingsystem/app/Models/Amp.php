<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amp extends Model
{
    use HasFactory;
    function getAmpDetails(){
        return $this->hasMany('App\Models\AmpDetail');

    }
}
