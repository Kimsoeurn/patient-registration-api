<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\ICommuneService;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommuneCollection;
use App\Http\Resources\CommuneResource;

class CommunesController extends Controller
{
    public function __construct(protected ICommuneService $communeService)
    {
    }

    public function index()
    {
        $data = $this->communeService->all();

        return new CommuneCollection($data);
    }


    public function show(int $id)
    {
        $data = $this->communeService->find($id);

        return new CommuneResource($data);
    }
}
