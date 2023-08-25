<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Config;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusController extends Controller
{
    public function index(){
        $logo = Config::pluck('logo');
        $routes = Route::pluck('name', 'id'); // Pega só isso
        return view('buses', compact('routes','logo'));
    }
    public function register(Request $request){
        $input = $request->validate([
            'plate'=>'required',
            'model'=>'Required',
            'hourLeft'=>'Required',
            'route_id'=>'required',
        ]);
        Bus::create($input);
        return Redirect::route('Buses.index');
    }
}
