<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Seld\PharUtils\Timestamps;

class Membre extends Model
{
    use HasFactory;
    // public $timestamps = false;
    // public function setFristNameAttribute($value)
    // {
    //     $this->attributes['firstname'] = "Mr " . $value;
    // }
    public function getUsers()
    {
        return $this->hasOne('App\Models\User');
    }
}
