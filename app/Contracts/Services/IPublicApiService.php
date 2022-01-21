<?php

namespace App\Contracts\Services;

interface IPublicApiService
{
    public function all();
    public function find(int $id);
}
