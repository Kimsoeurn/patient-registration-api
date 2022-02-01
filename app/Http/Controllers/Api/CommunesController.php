<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\ICommuneService;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommuneCollection;
use App\Http\Resources\CommuneResource;
use App\Http\Resources\VillageCollection;

class CommunesController extends Controller
{
    public function __construct(protected ICommuneService $communeService)
    {
    }

    public function index(): CommuneCollection
    {
        $data = $this->communeService->all();

        return new CommuneCollection($data);
    }


    public function show(int $id): CommuneResource
    {
        $data = $this->communeService->find($id);

        return new CommuneResource($data);
    }

    public function villages(int $communeId): VillageCollection
    {
        $data = $this->communeService->find($communeId)->villages;

        return new VillageCollection($data);
    }
}
