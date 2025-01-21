<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  // Show login form
  public function showLoginForm()
  {
    return view('auth.login');
  }
  // Login Handler
  public function login(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
      return redirect()->route('dashboard');
    }

    return back()->withErrors(['email' => 'Invalid Credentials']);
  }
  // Show Register form
  public function showRegisterForm()
  {
    return view('auth.register');
  }
  // Register Handler
  public function register(Request $request)
  {
    // register process
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6|confirmed',
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => $request->password,
    ]);

    return redirect()
      ->route('login')
      ->with('success', 'Registration Successful!');
  }

  // logout
  public function logout()
  {
    Auth::logout();
    return redirect()->route('login');
  }
}
