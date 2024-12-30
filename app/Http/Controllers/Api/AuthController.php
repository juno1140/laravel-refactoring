<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('auth-token');

            return response()->json([
                'token' => $token->plainTextToken,
                'user' => $request->user()
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['認証情報が正しくありません。'],
        ]);
    }
}
