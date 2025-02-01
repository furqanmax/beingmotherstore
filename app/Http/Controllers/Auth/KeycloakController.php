<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class KeycloakController extends Controller
{
     // Redirect to Keycloak
     public function redirect()
     {
         return Socialite::driver('keycloak')->redirect();
     }
 
     // Handle Keycloak Callback
     public function callback()
     {
         try {
             $keycloakUser = Socialite::driver('keycloak')->user();
 
             // Find user in DB or create a new one
             $user = User::updateOrCreate(
                 ['email' => $keycloakUser->email],
                 [
                     'name' => $keycloakUser->name ?? $keycloakUser->nickname,
                     'email' => $keycloakUser->email,
                 ]
             );
 
             Auth::login($user);
             return redirect()->intended('/admin'); // Redirect to Filament Dashboard
 
         } catch (\Exception $e) {
             return redirect('/login')->withErrors('Authentication failed.');
         }
     }
 
     // Logout from Keycloak
     public function logout()
     {
         Auth::logout();
         session()->invalidate();
 
         $logoutUrl = env('KEYCLOAK_BASE_URL') . "/realms/" . env('KEYCLOAK_REALM') . "/protocol/openid-connect/logout?redirect_uri=" . urlencode(env('APP_URL'));
         return redirect($logoutUrl);
     }
}
