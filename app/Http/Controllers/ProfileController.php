<?php

namespace App\Http\Controllers;

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('account', function ($trail) {
            $trail->push('Konto', route('profile'));
        });
        return view('profile');
    }
}
