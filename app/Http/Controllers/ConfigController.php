<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ConfigController extends Controller
{
    public function index()
    {
        $logo = Config::pluck('logo');
        return view('config',[
            'logo'=>$logo,
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

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $nomeLogo = time() . '.' . $logo->getClientOriginalExtension();
            $caminhoLogo = public_path('logos/' . $nomeLogo);
            $logo->move(public_path('logos'), $nomeLogo);

            $dados['logo'] = $nomeLogo;
        }

        Config::create($dados);

        return Redirect::route('Config.index');
    }

}
