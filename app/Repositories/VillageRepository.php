<?php

namespace App\Repositories;

use App\Contracts\Repositories\IVillageRepository;
use App\Models\Village;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class VillageRepository extends BaseRepository implements IVillageRepository
{
    protected $fieldSearchable = [
        'label',
        'prefix',
        'name_kh',
        'name_en',
        'commune_id'
    ];

    public function model()
    {
        return Village::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
