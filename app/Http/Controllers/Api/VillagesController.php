<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IVillageService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class VillagesController extends Controller
{
    public function __construct(protected IVillageService $villageService)
    {
    }

    public function index(): JsonResponse
    {
        $data = $this->villageService->all();

        return response()->json($data);
    }

    public function show(int $id): JsonResponse
    {
        $data = $this->villageService->find($id);

        return response()->json($data);
    }
}
