<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       $users = User::latest()->get();
       return view('users.index',[
           'users' => $users
       ]);
    }
    public function user(Request $request){
          $request->validate([
           'name' =>['required'],
           'email' =>['required', 'email', 'unique:users'],
           'password' =>['required','min:8'],
          ]);

         User::created([
             'name'=> $request->name,
             'email'=> $request->email,
             'password'=> bcrypt($request->password),
         ]);
        return back();
    }
    public function destroy(){
        
    }
}
