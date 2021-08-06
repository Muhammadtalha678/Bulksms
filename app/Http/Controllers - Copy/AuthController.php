<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }

     public function register()
    {
    	return view('auth.register');
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	// var_dump($data);exit();
    	$password = $data['password'];
    	$confirm_password = $data['confirm_password'];
    	$user = new User;

    	if ($password == $confirm_password) {
    	$user->name = $data['name'];
    	$user->email = $data['email'];
    	$user->password = $password;
    	$user->save();
    	return redirect('/login');
    		
    	}
    	else{
    	return redirect('/register');
    	}
    }
}
