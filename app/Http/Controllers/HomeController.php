<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $guest = request()->query('guest');

        return view('index', compact('guest'));
    }
}
