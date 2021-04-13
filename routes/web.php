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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', function() {
    $tasks = [
        'first-task' =>  'task1',
        'second-task' =>   'task2',
    '     third-task' =>   'task3'
        ];
    return view('tasks',compact('tasks'));

});
    Route::get('show/{id}', function ($id) {

        $tasks = [
        'first-task' =>  'task1',
        'second-task' =>   'task2',
    '     third-task' =>   'task3'
        ];

$task = $tasks[$id];

        return view('show', compact('task'));
    });


