<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index() {

          return view('auth');
    }

    public function store(Request $request) {

        /* Pruebas

      //dd($request->all());

      $email = $request->get('email');
      $password = $request->get('password');


      dd($request->only([
        'email', 'password'
      ]));

      if (!Auth::attempt(['email'=>$email,'password'=>$password])) {

          return redirect()->route('auth_show_path')->withErrors('No encontramos al usuario');
      }*/

      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required'
      ]);
      /*
          Lo mismo pero en lugar de Facades usando un helper de Laravel
          auth()->attempt()....
      */
      if (!Auth::attempt($request->only([
        'email', 'password'
      ]))) {

          return redirect()->route('auth_show_path')->withErrors('No encontramos al usuario');
      }



      return redirect()->guest('/');
    }

    public function destroy() {
       auth()->logout();
       return redirect()->route('auth_show_path');
    }
}
