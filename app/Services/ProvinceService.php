<?php

namespace App\Services;

use App\Contracts\Repositories\IProvinceRepository;
use App\Contracts\Services\IProvinceService;

class ProvinceService implements IProvinceService
{
    public function __construct(protected IProvinceRepository $provinceRepository)
    {
    }

    public function all()
    {
        return $this->provinceRepository->all();
    }

    public function find(int $id)
    {
        return $this->provinceRepository->find($id);
    }
}
