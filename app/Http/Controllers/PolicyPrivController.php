<?php

namespace App\Http\Controllers;

use App\Models\Priv;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class PolicyPrivController extends Controller
{
    public function index()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('priv', function ($trail) {
            $trail->push('Polityka prywatności', route('priv'));
        });
        $elements = Priv::orderBy('order')->get();
        return view('settings.priv.index', compact('elements'));
    }
    public function create()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('priv', function ($trail) {
            $trail->push('Polityka prywatności', route('priv'));
        });
        $elements = Priv::orderBy('order')->get();
        return view('settings.priv.create', compact('elements'));
    }
    public function store(Request $request)
    {
        $priv = new Priv();
        $priv->type = $request->type;
        $priv->content = $request->content;
        $priv->order = $request->order;
        $res = $priv->save();

        if ($res) {
            return redirect()->route('priv')->with('success', 'Treść została pomyślnie zapisana.');
        } else {
            return redirect()->route('priv.create')->with('fail', 'Treść nie została zapisana.');
        }
    }
    public function edit(Priv $element)
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('priv', function ($trail) {
            $trail->push('Polityka prywatności', route('priv'));
        });
        $elements = Priv::orderBy('order')->get();
        return view('settings.priv.edit', compact('element', 'elements'));
    }
    public function update(Request $request, Priv $element)
    {
        $res = $element->update([
            'type' => $request->type,
            'content' => $request->content,
            'order' => $request->order,
        ]);

        if ($res) {
            return redirect()->route('priv')
                ->with('success', 'Treść została zaktualizowana.');
        } else {
            return redirect()->route('priv.edit', $element->id)
                ->with('fail', 'Wystąpił błąd podczas aktualizowania treści.');
        }
    }
    public function delete(Priv $element)
    {
        $res = $element->delete();
        if ($res) {
            return redirect()->route('priv')
                ->with('success', 'Treść została usunięta.');
        } else {
            return redirect()->route('priv')
                ->with('fail', 'Wystąpił błąd podczas usuwania treści.');
        }
    }
}
