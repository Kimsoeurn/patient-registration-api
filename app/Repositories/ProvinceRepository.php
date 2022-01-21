<?php

namespace App\Repositories;
use App\Contracts\Repositories\IProvinceRepository;
use App\Models\Province;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class ProvinceRepository extends BaseRepository implements IProvinceRepository
{
    protected $fieldSearchable = [
        'label',
        'prefix',
        'name_kh',
        'name_en'
    ];

    public function model()
    {
        return Province::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
