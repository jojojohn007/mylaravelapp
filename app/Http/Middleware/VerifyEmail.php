<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public

    function

    handle(Request $request, Closure

    $next)
    {
        $token = $request->route('token');

        if ($user = User::where('verification_token', $token)->first()) {
            $user->email_verified_at = now();
            $user->save();

            // Redirect to your custom URL
            return redirect()->to('/verified');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid verification token.']);
    }
}
