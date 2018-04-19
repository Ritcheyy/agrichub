<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;

class PagesController extends Controller
{
    //
    public function showIndex(){
        $Ads = Ads::all();
        return view('index')->with('Ads', $Ads);
    }
}
