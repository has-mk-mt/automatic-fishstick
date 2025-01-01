<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;


class DashboardController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        if ($user->name !== 'admin') {
            abort(403, 'このページにはアクセスできません。');
        }else{
            $userCount = User::count();
            $postCount = \App\Models\Post::count();
            $commentCount = \App\Models\Comment::count();

            return view('admin.dashboard', compact('userCount', 'postCount', 'commentCount'));
            }
}
}


