<?php



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function(){
	Route::resource('tasks', 'TaskController');
});
