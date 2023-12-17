<?php

namespace App\Http\Controllers;

use App\Models\Cookie;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class PolicyCookieController extends Controller
{
    public function index()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('cookie', function ($trail) {
            $trail->push('Polityka cookies', route('cookie'));
        });
        $elements = Cookie::orderBy('order')->get();
        return view('settings.cookie.index', compact('elements'));
    }
    public function create()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('cookie', function ($trail) {
            $trail->push('Polityka cookies', route('cookie'));
        });
        $elements = Cookie::orderBy('order')->get();
        return view('settings.cookie.create', compact('elements'));
    }
    public function store(Request $request)
    {
        $cookie = new Cookie();
        $cookie->type = $request->type;
        $cookie->content = $request->content;
        $cookie->order = $request->order;
        $res = $cookie->save();

        if ($res) {
            return redirect()->route('cookie')->with('success', 'Treść została pomyślnie zapisana.');
        } else {
            return redirect()->route('cookie.create')->with('fail', 'Treść nie została zapisana.');
        }
    }
    public function edit(Cookie $element)
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('cookie', function ($trail) {
            $trail->push('Polityka cookies', route('cookie'));
        });
        $elements = Cookie::orderBy('order')->get();
        return view('settings.cookie.edit', compact('element', 'elements'));
    }
    public function update(Request $request, Cookie $element)
    {
        $res = $element->update([
            'type' => $request->type,
            'content' => $request->content,
            'order' => $request->order,
        ]);

        if ($res) {
            return redirect()->route('cookie')
                ->with('success', 'Treść została zaktualizowana.');
        } else {
            return redirect()->route('cookie.edit', $element->id)
                ->with('fail', 'Wystąpił błąd podczas aktualizowania treści.');
        }
    }
    public function delete(Cookie $element)
    {
        $res = $element->delete();
        if ($res) {
            return redirect()->route('cookie')
                ->with('success', 'Treść została usunięta.');
        } else {
            return redirect()->route('cookie')
                ->with('fail', 'Wystąpił błąd podczas usuwania treści.');
        }
    }
}
