<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\VerifyEmail;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('auth');
});
Route::get('/auth', function () {
    return view('authentication/auth');
});

Route::get('/todolist', function () {
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
'verify'=>true
]);

Route::get('/edit/{task}', [TaskController::class,'editScreen']);
Route::put('/edit/{task}', [TaskController::class, 'updateTask']);
Route::delete('/delete/{task}', [TaskController::class, 'deleteTask']);


Route::put('/addtask', [TaskController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email',function(){
    Mail::to('jojojohn7777777@gmail.com')->send(new MyEmail());
    return new MyEmail();
});

Route::get('/verify-email/{token}', function ($token) {
    return redirect()->route('verification', ['token' => $token]);
})->middleware(VerifyEmail::class);

Route::get('/verification/{token}', [VerificationController::class, 'verify'])->name('verification');
