<?php

namespace App\Http\Controllers\Templates;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('templates.dashboard', compact('users'));
    }
}
