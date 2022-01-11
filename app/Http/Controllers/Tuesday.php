<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tuesday extends Controller
{
    function getDate(Request $req)
    {
        $req->validate([
            'Username' => 'required',
            'Password' => 'required'
        ]);
        return $req->input();
    }
}
