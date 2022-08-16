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
        $githubUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'google_token' => $githubUser->token,
            'google_refresh_token' => $githubUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
