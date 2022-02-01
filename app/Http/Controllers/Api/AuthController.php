<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IUserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function __construct(protected IUserService $userService)
    {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $user = $this->userService->insert($request);

        $token = $user->createToken('auth-token');

        return response()->json([
            'user' => $user,
            'access_token' => $token->accessToken
        ]);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        if (! auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid email/password',
            ]);
        }

        $token = auth()->user()->createToken('auth-token');

        return response()->json([
            'status' => true,
            'message' => 'Login Successfully',
            'access_token' => $token->accessToken,
            'user' => auth()->user()
        ]);
    }

    public function frontLogin()
    {
        $params = [
            'grant_type'    => 'password',
            'client_id'     => config('auth.client_id'),
            'client_secret' => config('auth.client_secret'),
            'username'      => request('username'),
            'password'      => request('password'),
            'scope'         => '*',
        ];

        $request = Request::create(config('app.url') . '/oauth/token', 'POST', $params);

        return app()->handle($request);
    }

    public function logout()
    {
        auth()->user()->tokens()->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json('Logout successfully');
    }
}
