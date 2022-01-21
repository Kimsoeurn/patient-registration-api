<?php

namespace App\Services;

use App\Contracts\Repositories\ICommuneRepository;
use App\Contracts\Repositories\IVillageRepository;
use App\Contracts\Services\ICommuneService;
use App\Contracts\Services\IVillageService;

class VillageService implements IVillageService
{
    public function __construct(protected IVillageRepository $villageRepository)
    {
    }

    public function all()
    {
        return $this->villageRepository->all();
    }

    public function find(int $id)
    {
        return $this->villageRepository
                    ->find($id);
    }
}
