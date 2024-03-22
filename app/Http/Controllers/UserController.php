<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user',['users'=>$users]);
    }

    public function showProfile($id){
        $user = User::findOrFail($id);
        return view('user.showUser', compact('user'));
    }
}
