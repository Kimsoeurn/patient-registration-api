<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IProvinceService;
use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictCollection;
use App\Http\Resources\ProvinceCollection;
use App\Http\Resources\ProvinceResource;

class ProvinceController extends Controller
{
    public function __construct(protected IProvinceService $province)
    {
    }

    public function index(): ProvinceCollection
    {
        $data = $this->province->all();

        return new ProvinceCollection($data);
    }

    public function show(int $id): ProvinceResource
    {
        $data = $this->province->find($id);

        return new ProvinceResource($data);
    }

    public function districts(int $provinceId): DistrictCollection
    {
        $data = $this->province->find($provinceId)->districts;

        return new DistrictCollection($data);
    }
}
