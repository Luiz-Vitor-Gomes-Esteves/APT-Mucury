<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Causality;
use App\Models\Config;
use App\Models\Event;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index()
    {
        $logo = Config::pluck('logo');
        $routes = Route::pluck('name', 'id');
        $causality = Causality::pluck('type', 'id');
        $bus = Bus::pluck('plate','id');
        return view('event', compact('bus','causality','routes','logo'));
    }

    public function registerCausality(Request $request)
    {
        $input = $request->validate([
            'type'=>'required',
        ]);
        Causality::create($input);
        return Redirect::route('Event.index');
    }

    public function registerEvent(Request $request)
    {
        $input = $request->validate([
            'time'=>'required',
            'local'=>'required|string',
            'description'=>'required|string',
            'causality_id'=>'required',
            'route_id'=>'required',
            'bus_id'=>'required',
            'date'=>'required'
        ]);
        Event::create($input);
        return Redirect::route('Event.index');
    }

}
