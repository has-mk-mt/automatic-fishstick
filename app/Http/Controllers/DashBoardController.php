<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {

        if (auth()->user()->name !== 'admin') {
            abort(403, 'このページにはアクセスできません。');
        }

        return view('dashboard');
    }
}
