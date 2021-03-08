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
         User::created([
             'name'=> $request->name,
             'email'=> $request->email,
             'password'=> $request->password,
         ]);
        return back();
    }
    public function destroy(){
        
    }
}
