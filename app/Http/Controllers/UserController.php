<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('/success');
        }

        return view('login'); 
    }

    public function Register(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = new User();
            $user->username = $request->username;
            $user->prenom = $request->prenom;
            $user->nom = $request->nom;
            $user->age = $request->age;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('login');
        }

        return view('Register');
    }

    public function success(){
        return view('success');
    }

    public function deconnexion(User $user){
        Auth::logout($user);
        return redirect('/login');

    }

}