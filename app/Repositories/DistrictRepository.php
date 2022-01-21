<?php

namespace App\Repositories;
use App\Contracts\Repositories\IDistrictRepository;
use App\Models\District;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class DistrictRepository extends BaseRepository implements IDistrictRepository
{
    protected $fieldSearchable = [
        'label',
        'prefix',
        'name_kh',
        'name_en',
        'province_id'
    ];

    public function model()
    {
        return District::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
