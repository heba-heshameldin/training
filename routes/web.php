<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', function () {
    return view('hello');
});
Route::get('test',function(){
    return "hi in my test file ";
});


// هنا لم اكون حابه اعمل براميرت امرره
// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('hello');
// });

Route::view("about",'about');
Route::view("contact",'contact');
 Route::get("users/{user}",[users::class,'index']);
 Route::get("users/{user}",[users::class,'index']);
 Route::view("heba",'heba');

Route::get("/usernames/{name}",function($name){
return view("username",['name'=>$name]);
});
// داله posst من الدوال التي تستخدم بشكل عام لاستقبال القيم ولكن لما ارسل لها قيم من get مش هتظهر 
//  طيب حل اعمل csrf token وهنا هيخلي التوكن يظهر القيم علي الشاشه امام امستخدم 
Route::view("test",'testpost');
Route::get('testpost',function(){
    return '
    <form method="post">
    <input type="hidden" name= "_token" value= "'.csrf_token().'"//>
    <input type ="submit" value="send"/>
    <input type = "text" value="foo" />
    </form>';

});
Route::post('testpost',function(){
return 'this is the test file of post'.request('foo');
});
