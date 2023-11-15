<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/auth', function () {
    return view('authentication/auth');
});

Route::get('/dashboard', function () {
    $data = [
        'Task 1' => 'Doing assignments',
        'Task 2' => 'Finish coding project',
        'Task 3' => 'Prepare for presentation',
        'Task 4' => 'Run errands',
        'Task 5' => 'Clean the house',
    ];
    $data = [
        [
            'title' => 'Task 1',
            'description' => 'Doing assignment',
            'status' => 'todo',
            'id' => '1'
        ]
    ];
    return view('home/dashboard', ['data' => $data]);
});

//authentication 

Route::post('/signup', [Authentication::class, 'signupAction'])->name('signup');
Route::post('/login', [Authentication::class, 'loginAction'])->name('login');

//implementing blade template

Route::get('/page', function () {
    return view('page');
});


//working with database

Route::get('/addtask', function () {
    return view('task/addtask');
});

Route::get('/edit/{task}', [TaskController::class,'editScreen']);
Route::put('/edit/{task}', [TaskController::class, 'updateTask']);
Route::delete('/delete/{task}', [TaskController::class, 'deleteTask']);


Route::put('/addtask', [TaskController::class, 'index']);
