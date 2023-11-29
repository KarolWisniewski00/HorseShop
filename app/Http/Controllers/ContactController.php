<?php

namespace App\Http\Controllers;

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('contact', function ($trail) {
            $trail->push('Kontakt', route('contact'));
        });
        return view('contact');
    }
}
