<?php

namespace App\Http\Controllers;

use App\Models\Bus;
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

    public function update(Request $request)
{
    dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'timeStart' => 'required',
            'timeEnd' => 'required',
        ]);

        $id = $request->input('id');

        $data = [
            'name' => $request->input('name'),
            'timeStart' => $request->input('timeStart'),
            'timeEnd' => $request->input('timeEnd'),
        ];

        Route::where('id', $id)->update($data);

        return Redirect::route('Routes.index');
}
    public function delete(Request $request)
    {
        $id = $request->query('id');

        Bus::where('route_id', $id)->delete();

        $route = Route::findOrFail($id);
        $route->delete();

        return Redirect::route('Routes.index');
    }

}
