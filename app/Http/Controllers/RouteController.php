<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class RouteController extends Controller
{
    public function index(){
        $logo = Config::pluck('logo');
        return view('routes',[
            'logo'=>$logo,
        ]);
    }

    public function register(Request $request){
        $input = $request->validate([
            'name'=>'required|string',
            'timeStart'=>'Required',
            'timeEnd'=>'Required',
        ]);

        Route::create($input);
        return Redirect::route('Routes.index');
    }
}
