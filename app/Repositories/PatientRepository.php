<?php

namespace App\Repositories;

use App\Contracts\Repositories\IPatientRepository;
use App\Models\Patient;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class PatientRepository extends BaseRepository implements IPatientRepository
{
    protected $fieldSearchable = [
        'health_id_card',
        'name_kh',
        'name_en'
    ];

    public function model()
    {
        return Patient::class;
    }

    public function boot()
    {
//        $this->pushCriteria(app(RequestCriteria::class));
    }
}
