<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IDistrictService;
use App\Http\Controllers\Controller;

class DistrictsController extends Controller
{
    public function __construct(protected IDistrictService $districtService)
    {

    }
    public function index()
    {
        $data = $this->districtService->all();

        return response()->json($data);
    }

    public function show($id)
    {
        $data = $this->districtService->find($id);

        return response()->json($data);
    }

    public function getByProvince(int $provinceId)
    {
        $data = $this->districtService->findByParent($provinceId);

        return response()->json($data);
    }
}
