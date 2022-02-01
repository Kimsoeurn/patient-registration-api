<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IVillageService;
use App\Http\Controllers\Controller;
use App\Http\Resources\VillageCollection;
use App\Http\Resources\VillageResource;
use Illuminate\Http\JsonResponse;

class VillagesController extends Controller
{
    public function __construct(protected IVillageService $villageService)
    {
    }

    public function index(): VillageCollection
    {
        $data = $this->villageService->all();

        return new VillageCollection($data);
    }

    public function show(int $id): VillageResource
    {
        $data = $this->villageService->find($id);

        return new VillageResource($data);
    }
}
