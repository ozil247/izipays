<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers()
    {
        $users = User::where('type','user')->latest()->take(10)->get();
        return view( 'all_users', compact('users'));
    }
}
