<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", "App\Http\Controllers\TasksController@tasks");
Route::get("tasks/{task}", "App\Http\Controllers\TasksController@show");
Route::post("tasks", "App\Http\Controllers\TasksController@store");
Route::patch("tasks/{task}", "App\Http\Controllers\TasksController@update");
Route::delete("tasks/{task}", "App\Http\Controllers\TasksController@delete");