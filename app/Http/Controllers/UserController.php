<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function user_lists(Request $request)
    { 
            $lists = User::orderBy('id', 'desc')->get();
            return view('user.lists', compact('lists'));
    }
}
