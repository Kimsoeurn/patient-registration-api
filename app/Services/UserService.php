<?php
namespace App\Services;

use App\Contracts\Repostitories\IUserRepository;
use App\Contracts\Services\IUserService;
use Illuminate\Http\Request;

class UserService implements IUserService
{
    public function __construct(protected IUserRepository $userRepository)
    {

    }

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function paginate()
    {
        // TODO: Implement paginate() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function findWhere(array $where, array $columns = ['*'])
    {
        // TODO: Implement findWhere() method.
    }

    public function insert(Request $request)
    {
        // TODO: Implement insert() method.
    }

    public function update(Request $request, int $id)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
