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
        return $this->provinceRepository
                ->all(['id', 'name_kh']);
    }

    public function find(int $id)
    {
        return $this->provinceRepository
                ->with('districts')
                ->find($id);
    }
}
