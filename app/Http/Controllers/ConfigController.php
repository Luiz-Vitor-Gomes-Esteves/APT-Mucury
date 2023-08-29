<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    public function index()
    {
        $logo = Config::pluck('logo');
        $url = Storage::url($logo->first());
        //dd(asset('storage/' . 'logos/UiQ2Rwy0KcxabUrGMUi3UN0xWWKcOuubU9fEVtJ5.jpg'));

        return view('config',[
            'logo'=>$url,
        ]);
    }


    public function register(Request $request)
    {
        $request->validate([
            'logo' => 'image',
        ]);

        $dados = [
            'darkMode' => $request->has('darkMode') ? true : false,
            'color' => $request->input('color'),
        ];

        $uploaded = $request->file('logo')->store('logos');
        $dados['logo'] = $uploaded;

        Config::create($dados);

        return Redirect::route('Config.index');
    }

}


/*
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $nomeLogo = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('logos'), $nomeLogo);

            $dados['logo'] = $nomeLogo;
        }
*/
