<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

	public function login(){
		return view('auth.login');
	}

	public function postLogin(Request $request)
	{
    // dd('sukes');
		$user = auth()->attempt(['email' => $request->email, 'password'=> $request->password]);

		if (!$user) {
			return redirect('/login')->with('msg', 'Cek Password Dan Email Anda');
		}

    return redirect('/profile');

		
	}

    public function register()
    {
    	return view('auth/register');
    }

    public function simpanRegister(Request $request)
    {
	  
      $this->validate($request, [
      	'name' => 'required|min:3',
      	'email' => 'required|email|unique:users',
      	'password' => 'required|min:6|confirmed',
        'gambar' => 'required|mimes:jpeg,jpg,png|max:10000'
      ]);

       $fileName = time().'.png';
       $request->file('gambar')->storeAs('public/foto', $fileName);


    	$user = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
        'foto' => $fileName

		]);

		auth()->loginUsingId($user->id);
		
		return redirect('/profile');
    }

    public function profile()
    {
      $data = Auth::user();
    	return view('auth.profile', compact('data'));
    }

    public function logout(){
      auth()->logout();
      return redirect('login');
    }
}
