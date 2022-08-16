<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller as Controller;

class AuthController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'token' => $googleUser->token,
            'refresh_token' => $googleUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
