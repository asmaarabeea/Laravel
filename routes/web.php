<?php



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


Auth::routes();

Route::group(["middleware" => "auth"], function(){


    Route::get('/', function () {
        return view('welcome');
    });
  
    Route::get('/Task_View',"My_Controller@index");

    Route::get('/Add_Task',"My_Controller@ShowFormTask");

    Route::post('/Add_Task',"My_Controller@add");

    Route::get("/task/{id}", "My_Controller@showTask");
        
    Route::get("/my_tasks", "TaskController@index");

    Route::post("/my_tasks", "TaskController@GetTasks");

    Route::get("/delete/{id}", "TaskController@Delete_Task");

    Route::get("/edit/{id}", "TaskController@Edit_Task");

     Route::post("/edit/{id}", "TaskController@Save_Update");

    Route::get('/home', 'HomeController@index');


});
