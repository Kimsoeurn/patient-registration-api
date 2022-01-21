<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\IPatientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct(protected IPatientService $patientService)
    {
    }

    public function index(): JsonResponse
    {
        $data = $this->patientService->paginate();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function store(CreatePatientRequest $request)
    {
        $patient = $this->patientService->insert($request);

        return response()->json([
            'status' => true,
            'data' => $patient
        ]);
    }

    public function show($id)
    {
        $patient = $this->patientService->find($id);

        return response()->json($patient);
    }

    public function update(UpdatePatientRequest $request, $id)
    {
        $patient = $this->patientService->update($request, $id);

        return response()->json([
            'status' => true,
            'data' => $patient,
        ]);
    }

    public function destroy($id)
    {
        $this->patientService->delete($id);

        return response()->json([
            'status' => true,
            'data' => __('Deleted'),
        ]);
    }
}
