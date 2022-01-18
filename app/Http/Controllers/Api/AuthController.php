<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IUserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected IUserService $userService)
    {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $user = $this->userService->insert($request);

        return response()->json($user);
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
            'message' => 'Login Successfuly',
            'access_token' => $token,
        ]);
    }
}
