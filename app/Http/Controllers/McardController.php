<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Mcard;
use App\Models\Mcard_Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class McardController extends Controller
{
    public function index(){
        $users = User::pluck('name', 'id'); // Pega só isso
        $mcardTypes = Mcard_Type::pluck('type', 'id');
        $logo = Config::pluck('logo');
        return view('mcard', compact('users', 'mcardTypes','logo'));
    }

    public function register(Request $request)
    {
        $typeMcard = $this->registerType($request);
        $Mcard = $this->registerMcard($request);

        return Redirect::route('Mcard.index', compact('typeMcard', 'Mcard'));
    }

    private function registerMcard(Request $request)
    {
        $input = $request->validate([
            'cod' => 'required',
            'type' => 'required|string',
            'dateEmission' => 'required',
            'user_id' => 'required',
            'credits' => 'required',
            'mcard_type_id'=>'required,'
        ]);
        return Mcard::create($input);
    }

    private function registerType(Request $request)
    {
        $input = $request->validate([
            'type' => 'required|string',
        ]);
        return Mcard_Type::create($input);
    }

}
