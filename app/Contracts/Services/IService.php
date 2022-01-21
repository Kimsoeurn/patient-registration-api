<?php

namespace App\Contracts\Services;

use Illuminate\Http\Request;

interface IService
{
    public function all();
    public function paginate();
    public function find(int $id);
    public function findWhere(array $where, array $columns = ['*']);
    public function insert(Request $request);
    public function update(Request $request, int $id);
    public function delete(int $id);
}
