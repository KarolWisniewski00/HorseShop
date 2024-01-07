<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsAdminController extends Controller
{

    public function index()
    {
        $elements = Setting::get();
        $payment_classic = Setting::where('type','payment_classic')->first();
        $payment_transfer24 = Setting::where('type','payment_transfer24')->first();
        $payment_shipcash = Setting::where('type','payment_shipcash')->first();
        $payment_cash = Setting::where('type','payment_cash')->first();
        return view('settings.index', compact('elements','payment_classic','payment_transfer24','payment_shipcash','payment_cash'));
    }
    public function edit(Setting $element)
    {
        //if (
        //    $element->type == 'photo_about_home_page_1' ||
        //    $element->type == 'photo_about_home_page_2' ||
        //    $element->type == 'photo_about_home_page_3' ||
        //    $element->type == 'photo_collaboration_page_1' ||
        //    $element->type == 'photo_collaboration_page_2' ||
        //    $element->type == 'photo_collaboration_page_3' ||
        //    $element->type == 'photo_about_page_1' ||
        //    $element->type == 'photo_about_page_2' ||
        //    $element->type == 'photo_about_page_3' ||
        //    $element->type == 'photo_about_page_4' ||
        //    $element->type == 'photo_about_page_5' ||
        //    $element->type == 'photo_about_page_6'
        //) {
        //    $photos = File::files(public_path('photo'));
        //
        //    // Sortowanie tablicy $photos od najnowszych do najstarszych na podstawie daty utworzenia.
        //    usort($photos, function ($a, $b) {
        //        return filemtime($b) - filemtime($a);
        //    });
        //} else {
        //    $photos = null;
        //}
        return view('settings.edit', compact('element'/*, 'photos'*/));
    }
    public function update(Request $request, Setting $element)
    {
        $res = $element->update([
            'content' => $request->content,
        ]);

        if ($res) {
            return redirect()->route('dashboard.settings')
                ->with('success', 'Treść została zaktualizowana.');
        } else {
            return redirect()->route('dashboard.settings.edit', $element->id)
                ->with('fail', 'Wystąpił błąd podczas aktualizowania treści.');
        }
    }
}
