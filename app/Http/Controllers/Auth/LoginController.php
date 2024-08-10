<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\UserSendNewPassword;
use Validator, Str, Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        if(Auth::attempt(['identification' => $request->identification, 'password' => $request->password], true)):
            return redirect()->route('home');
        else:
            return back()->with('message', 'El número de identificación o la contraseña son incorrectos, verifiquelo e intente nuevamente.')
                ->with('type-alert', 'alert-danger')
                ->with('icon','mdi-block-helper');
        endif;
    }
}
