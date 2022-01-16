<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membre;

class MemberControlles extends Controller
{
    function index()
    {
        // //  return view('membre');
        // //   return membre::all();
        // $membre = new membre;
        // $membre->id = "5";
        // $membre->firstname = "ahmed";
        // $membre->email = "ahmed.hh@gmail.com";
        // $membre->save();
        return membre::find(5)->getUsers;
    }
}
