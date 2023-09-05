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
        $routes = Route::all();
        $buses = Bus::all();
        return view('buses', compact('routes','logo','buses'));
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
  /*
    public function update(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'email:rfc,dns',
            //'photo' => 'image',
        ]);

        //$namePhoto = null;

        // Atualização dos dados do usuário
        Bus::updateOrCreate([
            'plate' => $request->input('plate'),
            'email' => $request->input('email'),
           // 'photo' => $namePhoto,
            'CPF' => $request->input('CPF'),
        ]);

        return Redirect::route('User.login');

    }
    */
    public function delete(Request $request){
        $bus = Bus::find($request);

        $bus->delete();
        Bus::destroy($request);
        //return Redirect::route('User.login');
    }

}
