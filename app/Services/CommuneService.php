<?php

namespace App\Services;

use App\Contracts\Repositories\ICommuneRepository;
use App\Contracts\Services\ICommuneService;

class CommuneService implements ICommuneService
{
    public function __construct(protected ICommuneRepository $communeRepository)
    {
    }

    public function all()
    {
        return $this->communeRepository->all();
    }

    public function find(int $id)
    {
        return $this->communeRepository
                    ->with('villages')
                    ->find($id);
    }
}
