<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use illuminate\support\facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login', 'register']]);
        $this->middleware('auth:sanctum')->only('logout');
    }

    public function register()
    {
        $user = new User(request()->all());
        $user->password = $user->password;
        $user->save();
        return response()->json(["data" => $user], 200);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     */

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $fields['email'])->first();

        if (!Hash::check($fields['password'], $user->password)) {
            return response()->json([
                'msg' => 'Bad Credentials'
            ], 401);
        }

        return response()->json([
            'token' => $user->createToken('appToken')->plainTextToken
        ], 200);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['msg' => 'logout'], 200);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
}
