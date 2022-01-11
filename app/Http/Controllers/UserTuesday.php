<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTuesday extends Controller
{
    function index()
    {
        return DB::select("select * from users");
    }
}
