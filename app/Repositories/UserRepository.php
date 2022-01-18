<?php

namespace App\Repostitories;

use App\Contracts\Repostitories\IUserRepository;
use App\Models\User;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    protected $fieldSearchable = [
        'name',
    ];

    public function model(): string
    {
        return User::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
