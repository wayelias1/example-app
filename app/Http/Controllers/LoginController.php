<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        //validar datos

        $user = new User();
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('index'));

    }
    public function login(Request $request){
        $credentials = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            //"active=> $request->true
        ];

        $remember = ($request->has('remember') ? true : false);
        //aqui el remember es opcional
        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        }else{
            return redirect('login');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

}