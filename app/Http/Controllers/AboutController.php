<?php

namespace App\Http\Controllers;

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('about', function ($trail) {
            $trail->push('O nas', route('about'));
        });
        return view('about');
    }
}
