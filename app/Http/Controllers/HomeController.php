<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'users' => User::all()
        ]);
    }
}
