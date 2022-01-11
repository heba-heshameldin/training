<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\Tuesday;
use App\Http\Controllers\UserTuesday;


Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('hello');
});
Route::get('test', function () {
    return "hi in my test file ";
});

// هنا لم اكون حابه اعمل براميرت امرره
// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('hello');
// });

Route::view("about", 'about');
Route::view("contact", 'contact');
Route::get("users/{user}", [users::class, 'index']);
Route::get("users/{user}", [users::class, 'index']);


Route::get("/usernames/{name}", function ($name) {
    return view("username", ['name' => $name]);
});
// -------------------------------------------------------------------------------
// داله posst من الدوال التي تستخدم بشكل عام لاستقبال القيم ولكن لما ارسل لها قيم من get مش هتظهر 
//  طيب حل اعمل csrf token وهنا هيخلي التوكن يظهر القيم علي الشاشه امام امستخدم 
/*  طيب ليه اتعمل دوال put , patch , delete 
put --- غالبا انا بستخدمها في عمليات update
patch --- غالبا تستخدم في laravel content عشان model 
delete --- غالبا ممكن اقول انه بيشتغل مع resources ليه بقه هنا ممكن اقول انه بيعمل صفحات العرض و index ,create ,edit pages 
*/
Route::view("test", 'testpost');
Route::get('testpost', function () {
    return '
    <form method="post">
    <input type="hidden" name= "_token" value= "' . csrf_token() . '"/>
    <input type ="submit" value="send"/>
    <input type = "text" name="foo" />
    <input type = "hidden" name="_method" value="PATCH" />
    </form>';
});
Route::put('testpost', function () {
    return 'this is the test file of put ' . request('foo');
});
Route::delete('testpost', function () {
    return 'this is the test file of delete ' . request('foo');
});
Route::patch('testpost', function () {
    return 'this is the test file of patch ' . request('foo');
});
// -------------------------------------------------------------------------------------
/*
parameter 
غالبا ما يدخل في ثغره id هي الثغره اللي بتمكني اني اوصل لصفحات المستخدمين الاخرين 
id? -- id = null معناها سواء انا كتبت id او لا اقدر اوصل برده للصفحه 
*/
Route::get('heba/{id?}', function ($id = null) {
    return 'welcome to the user page' . $id;
});
// )->where('id', '[0-9]+'); حاله قديمة
Route::resource('users', UserController::class);
Route::view('view2', 'view2');
Route::post("Tuesday", [Tuesday::class, 'getDate']);
Route::view("login", "Tuesday");
Route::view("noaccess", "noaccess");
Route::get("UserTuesday", [UserTuesday::class, 'index']);
