<?php

namespace App\Repositories;

use App\Contracts\Repositories\IUserRepository;
use App\Models\User;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    protected $fieldSearchable = [
        'name',
    ];

    public function model()
    {
        return User::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
