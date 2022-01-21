<?php

namespace App\Services;

use App\Contracts\Repositories\IDistrictRepository;
use App\Contracts\Services\IDistrictService;

class DistrictService implements IDistrictService
{
    public function __construct(protected IDistrictRepository $districtRepository)
    {
    }

    public function all()
    {
        return $this->districtRepository->all();
    }

    public function find(int $id)
    {
        return $this->districtRepository->find($id);
    }
}
