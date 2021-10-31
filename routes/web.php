
<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::post();
Route::put();
Route::delete();
Route::puth();*/



Route::get('/', function () {
    return view('welcome');
});


Route::get('/task' , function(){

    $tasks = [
        'ferst name' => 'nabel',
        'last name' => 'Qatrawi',
        'city' => 'Gaza' 
    ];



    return view('task' , compact('tasks'));
});



Route::get('/show/{id}' , function($id){

    $tasks = [
     'ferst name' => 'nabel',
     'last name' => 'Qatrawi',
     'city' => 'Gaza' 
    ];

    $task = $tasks[$id];
    return view('show' , compact('task'));
});
