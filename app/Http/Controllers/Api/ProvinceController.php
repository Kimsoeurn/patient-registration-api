<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IProvinceService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProvinceController extends Controller
{
    public function __construct(protected IProvinceService $province)
    {
    }

    public function index(): JsonResponse
    {
        $data = $this->province->all();

        return response()->json($data);
    }

    public function show(int $id): JsonResponse
    {
        $data = $this->province->find($id);

        return response()->json($data);
    }
}
