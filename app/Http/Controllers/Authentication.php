<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class Authentication extends Controller

{

    public function deleteAction(Task $task)
    {

        $userid = auth()->id();

        $userid = auth()->id();
        User::find($userid)->delete();

        return view('authentication/auth');
    }
    public function index()
    {
    }
    //Signup action


    public function signupAction(CreateValidationRequest $request)
    {

        //Validating user data

$validator = $request->validated();


        // $request->validate([
        //     'email' => 'required|email|max:250|unique:users',
        //     'password' => 'required|min:8',
        // ]);

        // $userdata = $request->only('email', 'password', 'password_confirmation');
        // $rules = [
        //     'email' => 'email|required|unique:users',
        //     'password' => 'required|min:6|confirmed'
        // ];
        // $message = [

        //     'confirmed'=>'Please re-enter confirm password correctly',
        //     'min:8'=>':attribute field cannot be empty'

        // ];
        // $validator = Validator::make($userdata, $rules,$message);

// dd($validator);
        // if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     return redirect()->back()->withErrors($errors);
        // }




        User::create([
            'name' => 'default_name',
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Takes email password from request :  

        $credentials = $request->only('name', 'email', 'password');

    //Login attempt to database


        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('email', $request->email);
        } else {
            return redirect('/auth')->with('message', 'Failed to login');
        }
    }


    public function loginAction(CreateValidationRequest $request)
    {

        // dd('hi');
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $data = [
                'Task 1' => 'Doing assignments',
                'Task 2' => 'Finish coding project',
                'Task 3' => 'Prepare for presentation',
                'Task 4' => 'Run errands',
                'Task 5' => 'Clean the house',
            ];
            return redirect('dashboard');
        } else {
            //normal one
            // return redirect('/auth')->with('message','Failed to login');
            //redirect using facade redirect
            // return Redirect::back();
            //temporary redirection
            // return redirect('/auth',302);
            //permanent redirection 
            // return redirect('/auth', 301);
            //see other redirection 
            return redirect('/auth', 303);
            // return redirect()->seeOther('/auth');

            // return redirect()->action([Authentication::class,'show']);

        };
    }
    //doubt
    public function show()
    {
        echo 'hey you just run a method using redirect() function';
    }
}
