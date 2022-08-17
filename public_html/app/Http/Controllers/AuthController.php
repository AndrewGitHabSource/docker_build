<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

use App\Http\Controllers\Controller as Controller;

class AuthController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): JsonResponse {
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

        Auth::login($user);

        $this->setCache($user, $googleUser->id);

        return response()->json($user);
    }

    private function setCache(User $user, string $id): void {
        Cache::put($id, $user, now()->addMinutes(15));
    }

    private function getCache($key) {
        return Cache::get($key);
    }
}
