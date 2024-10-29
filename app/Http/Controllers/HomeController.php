<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $q = request()->query('guest');
        $guest = str_replace('-', ' ', $q);

        return view('index', compact('guest'));
    }
}
