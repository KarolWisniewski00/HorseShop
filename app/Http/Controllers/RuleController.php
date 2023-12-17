<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('rule', function ($trail) {
            $trail->push('Regulamin', route('rule'));
        });
        $elements = Rule::orderBy('order')->get();
        return view('settings.rule.index', compact('elements'));
    }
    public function create()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('rule', function ($trail) {
            $trail->push('Regulamin', route('rule'));
        });
        $elements = Rule::orderBy('order')->get();
        return view('settings.rule.create', compact('elements'));
    }
    public function store(Request $request)
    {
        $rule = new Rule();
        $rule->type = $request->type;
        $rule->content = $request->content;
        $rule->order = $request->order;
        $res = $rule->save();

        if ($res) {
            return redirect()->route('rule')->with('success', 'Treść została pomyślnie zapisana.');
        } else {
            return redirect()->route('rule.create')->with('fail', 'Treść nie została zapisana.');
        }
    }
    public function edit(Rule $element)
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('rule', function ($trail) {
            $trail->push('Regulamin', route('rule'));
        });
        $elements = Rule::orderBy('order')->get();
        return view('settings.rule.edit', compact('element', 'elements'));
    }
    public function update(Request $request, Rule $element)
    {
        $res = $element->update([
            'type' => $request->type,
            'content' => $request->content,
            'order' => $request->order,
        ]);

        if ($res) {
            return redirect()->route('rule')
                ->with('success', 'Treść została zaktualizowana.');
        } else {
            return redirect()->route('rule.edit', $element->id)
                ->with('fail', 'Wystąpił błąd podczas aktualizowania treści.');
        }
    }
    public function delete(Rule $element)
    {
        $res = $element->delete();
        if ($res) {
            return redirect()->route('rule')
                ->with('success', 'Treść została usunięta.');
        } else {
            return redirect()->route('rule')
                ->with('fail', 'Wystąpił błąd podczas usuwania treści.');
        }
    }
}
