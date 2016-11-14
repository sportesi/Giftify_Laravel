<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Register;
use App\User;
use Auth;

class AuthenticationController extends Controller
{
  public function showLoginForm() {
    return view('header');
  }
  public function login(Request $request) {
    $this->validateWithBag('login', $request, [
        'email' => 'required',
        'password' => 'required',
    ]);
    $loginExitoso = Auth::attempt(
      [
        'email'		=>	$request->email,
        'password'	=>	$request->password
      ]);
      if($loginExitoso)
        return redirect()->intended('/');
        return redirect()->back()
          ->withErrors(['email'=>'El email o la contraseña ingresados no son correctos'], 'login');
  }
  public function showRegisterForm() {
    return view('paginas.registro');
  }
  public function register(Register $request) {
    $user = User::create([
      'name' 		=> $request->name,
      'email' 	=> $request->email,
      'password'  => bcrypt($request->password),
      'date' => $request->date,

    ]);
      Auth::login($user);
      return redirect('/');
  }
  public function logout() {
    Auth::logout();
    return redirect('/');
  }
}
