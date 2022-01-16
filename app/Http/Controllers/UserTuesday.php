<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserTuesday extends Controller
{
    function index()
    {
        return DB::select("select * from users");
    }
    function index1(){
        return User::all();
    }
}
