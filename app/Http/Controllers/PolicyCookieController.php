<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyCookieController extends Controller
{
    public function index()
    {
        return view('policy-cookie');
    }
}
