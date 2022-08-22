<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller as Controller;

class AuthController extends Controller
{
    public function redirect(): RedirectResponse {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): JsonResponse {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'token' => $googleUser->token,
                'avatar' => $googleUser->avatar,
                'refresh_token' => $googleUser->refreshToken,
            ]);

            Auth::login($user, true);

        } catch (\Error $error) {
            return response()->json($error);
        }

        return response()->json($user);
    }

    public function logout(): void {
        Auth::logout();
    }
}
