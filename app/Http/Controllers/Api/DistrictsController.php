<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IDistrictService;
use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictCollection;
use App\Http\Resources\DistrictResource;

class DistrictsController extends Controller
{
    public function __construct(protected IDistrictService $districtService)
    {

    }
    public function index()
    {
        $data = $this->districtService->all();

        return new DistrictCollection($data);
    }

    public function show($id)
    {
        $data = $this->districtService->find($id);

        return new DistrictResource($data);
    }
}
