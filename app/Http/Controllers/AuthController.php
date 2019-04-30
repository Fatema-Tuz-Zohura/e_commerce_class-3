<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm() {

    	$data= [];
    	$data['hero'] = false;

    	return view('register', $data);
    }

    public function register(Request $rr){

    	 $rr->validate([

    	 	'first_name'=>'required',
    	 	'last_name' =>'required',
    	 	'email' => 'required|email|unique:users,email',
    	 	'password' => 'required|min:6'
    	 ]);



    	 	$inputs= $rr->except(['_token']);
    	 	$inputs['password'] = bcrypt($inputs['password']);

    	 try{

    	 	User::create($inputs);

    	 	session()->flash('message', 'your account is successfully registered.');


    	 	return redirect()->route('login');
    	 }

    	 catch(Exception $e){


    	 	session()->flash('message', $e->getMessage());
				return redirect()->back();
}

    	 

    }


    public function showLoginForm() {

    	$data= [];
    	$data['hero'] = false;

    	return view('login', $data);
    }

    public function login(Request $rr)
    {

    	 $rr->validate([

    	 	'email' => 'required|email',
    	 	'password' => 'required|min:6'
    	 ]);

     $login_array = $rr->except(['_token']);

     if (auth()->attempt($login_array)) {
     	
     		return redirect()->route('register');
     }

     	session()->flash('message', 'Sry try again.');
     	return redirect()->back();
    }
}
