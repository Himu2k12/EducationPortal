<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class SocialiteController extends Controller
{
    public function callback(){
        $googleUser = Socialite::driver('google')->user();
        $checkGoogleUser=\App\Models\User::where('email',$googleUser->email)->where('google_id',null)->first();
        if ($checkGoogleUser){
            //return redirect('/login')->with('mass','Login with regular Email and Password!');
            $user = \App\Models\User::updateOrCreate([
                'email' => $googleUser->email,
            ], [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'role' => 3,
                'access' => 1,
                'password' => Hash::make($googleUser->id),
                'google_id' => $googleUser->id,
            ]);

            Auth::login($user);
            return redirect('/dashboard');
        }

           $user = \App\Models\User::updateOrCreate([
               'google_id' => $googleUser->id,
           ], [
               'name' => $googleUser->name,
               'email' => $googleUser->email,
               'role' => 3,
               'access' => 1,
               'password' => Hash::make($googleUser->id),
               'google_id' => $googleUser->id,
           ]);

           Auth::login($user);
           return redirect('/dashboard');


    }
}
