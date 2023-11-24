<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\VerifyEmail;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use Illuminate\Html\Form;
use Illuminate\Support\Facades\Log;

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
    return view('authentication/auth');
});
Route::get('/auth', function () {
    return view('authentication/auth');
})->name('auth');

Route::get('/dashboard', function () {
    $data = [
        [
            'title' => 'Task 1',
            'description' => 'Doing assignment',
            'status' => 'todo',
            'id' => '1'
        ]
    ];
    return view('home/dashboard', ['data' => $data]);
})->middleware('verified');

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

Auth::routes([
    'verify' => true
]);

Route::get('/edit/{task}', [TaskController::class, 'editScreen']);
Route::put('/edit/{task}', [TaskController::class, 'updateTask']);
Route::delete('/delete/{task}', [TaskController::class, 'deleteTask']);


Route::put('/addtask', [TaskController::class, 'addNewTaskAction']);


Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class, 'index']
)->name('home');

Route::delete('/deleteuser', [Authentication::class, 'deleteAction']);

Route::get('/login', function () {
    return redirect('/auth');
});

Route::get('/signup', function () {
    return redirect('/auth');
});
