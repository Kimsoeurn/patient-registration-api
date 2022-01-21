<?php
namespace App\Services;

use App\Contracts\Repositories\IUserRepository;
use App\Contracts\Services\IUserService;
use Illuminate\Http\Request;

class UserService implements IUserService
{
    public function __construct(protected IUserRepository $userRepository)
    {

    }

    public function all()
    {
        return $this->userRepository->all();
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
        return $this->userRepository->create($request->all());
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
