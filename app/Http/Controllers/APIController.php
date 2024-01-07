<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function payment($slug, $val){
        Setting::where('type',$slug)->update(['content'=>$val]);
        return 200;
    }
}
