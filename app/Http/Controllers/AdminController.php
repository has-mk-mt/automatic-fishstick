<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'userCount' => \App\Models\User::count(),
            'postCount' => \App\Models\Post::count(),
            'commentCount' => \App\Models\Comment::count(),
        ]);
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.manage-users', compact('users'));
    }
}
