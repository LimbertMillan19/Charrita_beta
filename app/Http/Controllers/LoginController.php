<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\user;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function register(Request $request){
        $user = New user();
        $user->name = $request -> input('name');
        $user->lastname = $request -> input('lastname');
        $user->email = $request -> input('email');
        $user->phone = $request -> input('phone');
        $user->location = $request -> input('location');
        $user->password = Hash::make($request -> input('password'));
        $user->save();

        return redirect(route('index'));
    }

    public function login(Request $request){
        $credencials = [
            "email" => $request->input('email'),
            "password" => $request->input('password')
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credencials,$remember)){
            $request->session()->regenerate();
            if(Auth::user()->rol == 'Administrador'){
                return redirect()->intended('/Admin/main');
            } else {
                return redirect()->intended(route('home'));
            }
        } else {
            return redirect(route('index'));
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }
}
