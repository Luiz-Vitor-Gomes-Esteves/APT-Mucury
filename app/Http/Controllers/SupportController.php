<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        $logo = Config::pluck('logo');
        return view('support',[
            'logo'=>$logo,
        ]);
    }
}
