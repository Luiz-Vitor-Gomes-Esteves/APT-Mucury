<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
//login
    public function indexLogin()
    {
        return view('auth/login');
    }
    public function index(){
        $logo = Config::pluck('logo');
        return view('userConfig',[
            'logo'=>$logo,
        ]);
    }
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');//Manda para credenciais

        if (Auth::attempt($credenciais)) { //Auentica no BD
            return Redirect::route('Home.show');
        } else {
            return Redirect::route('User.login');
        }
    }
//register
    public function indexRegister()
    {
        return view('auth/register');
    }

    public function register(Request $request)
    {
        $input = $request->validate([
            'name'=>'required|string',
            'email'=>'email:rfc,dns',
            'password' => 'required',
        ]);
        User::create($input);
        return Redirect::route('User.login');
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'email:rfc,dns',
            //'photo' => 'image',
        ]);

        //$namePhoto = null;

        // Atualização dos dados do usuário
        User::updateOrCreate([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
           // 'photo' => $namePhoto,
            'CPF' => $request->input('CPF'),
        ]);

        return Redirect::route('User.login');

    }
    public function delete(Request $request){
        $user = User::find($request);

        $user->delete();
        User::destroy($request);
        //return Redirect::route('User.login');
    }

}
