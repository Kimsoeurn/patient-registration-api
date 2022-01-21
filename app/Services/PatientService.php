<?php

namespace App\Services;

use App\Contracts\Repositories\IPatientRepository;
use App\Contracts\Services\IPatientService;
use Illuminate\Http\Request;

class PatientService implements IPatientService
{
    public function __construct(protected IPatientRepository $patientRepository)
    {
    }

    public function all()
    {
        return $this->patientRepository->all();
    }

    public function paginate()
    {
       return $this->patientRepository->paginate();
    }

    public function find(int $id)
    {
        return $this->patientRepository
                    ->lookupData()
                    ->find($id);
    }

    public function findWhere(array $where, array $columns = ['*'])
    {
        // TODO: Implement findWhere() method.
    }

    public function insert(Request $request)
    {
        return $this->patientRepository->create(
            array_merge($request->validated(), ['user_id' => auth()->user()->id])
        );
    }

    public function update(Request $request, int $id)
    {
        return $this->patientRepository->update($request->validated(), $id);
    }

    public function delete(int $id)
    {
        $this->patientRepository->delete($id);
    }
}
