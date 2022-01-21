<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IPatientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Http\Resources\PatientCollection;
use App\Http\Resources\PatientResource;

class PatientController extends Controller
{
    public function __construct(protected IPatientService $patientService)
    {
    }

    public function index(): PatientCollection
    {
        $data = $this->patientService->paginate();

        return new PatientCollection($data);
    }

    public function store(CreatePatientRequest $request)
    {
        $patient = $this->patientService->insert($request);

        return response()->json([
            'error' => false,
            'data' => $patient
        ]);
    }

    public function show($id)
    {
        $patient = $this->patientService->find($id);

        if (! $patient) {
            return response()->json([
                'error' => true,
                'data' => '404 Not Found',
            ], 404);
        }

        return new PatientResource($patient);
    }

    public function update(UpdatePatientRequest $request, $id)
    {
        $patient = $this->patientService->update($request, $id);

        return response()->json([
            'error' => false,
            'data' => $patient,
        ]);
    }

    public function destroy($id)
    {
        $this->patientService->delete($id);

        return response()->json([
            'error' => false,
            'data' => __('Deleted'),
        ]);
    }
}
