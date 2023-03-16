<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
            $credentials = $request->only(['email', 'password']);

            if (!$token = Auth::attempt($credentials)) {
                return response()->json([
                    'message' => 'Unauthorized',
                    'body' => []
                ], 400);
            }

            return response()->json([
                'message' => 'login successfully',
                'body' => [
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'user' => auth()->user(),
                    'expires_in' => auth()->factory()->getTTL() * 60 * 24
                ]
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Server Error',
                'body' => []
            ], 500);
        }
    }

    public function logout()
    {
        auth()->logout();

        return response()->json([
            'message' => 'Successfully logged out',
            'body' => []
        ], 200);
    }
}
