<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class registerationController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required'],
            'email' => ['required','email','min:10','max:20',Rule::unique('users', 'email')],
            'phone' => ['required','max:15'],
            'password' => ['required','min:8','max:30']
        ]);


        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
        //return "Hello from our controller";
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
