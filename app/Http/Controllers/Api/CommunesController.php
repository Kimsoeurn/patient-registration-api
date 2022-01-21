<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\ICommuneService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CommunesController extends Controller
{
    public function __construct(protected ICommuneService $communeService)
    {
    }

    public function index(): JsonResponse
    {
        $data = $this->communeService->all();

        return response()->json($data);
    }


    public function show(int $id): JsonResponse
    {
        $data = $this->communeService->find($id);

        return response()->json($data);
    }
}
