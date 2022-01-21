<?php

namespace App\Repositories;
use App\Contracts\Repositories\ICommuneRepository;
use App\Models\Commune;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class CommuneRepository extends BaseRepository implements ICommuneRepository
{
    protected $fieldSearchable = [
        'label',
        'prefix',
        'name_kh',
        'name_en',
        'district_id'
    ];

    public function model()
    {
        return Commune::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
