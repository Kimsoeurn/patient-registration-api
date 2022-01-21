<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePatientRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'health_id_card' => ['required',
                Rule::unique('patients')->ignore($this->route('patient'), 'id')
            ],
            'name_kh' => ['required'],
            'name_en' => ['required'],
            'date_of_birth' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'occupation' => ['required'],
            'phone_number' => ['nullable'],
            'other_id_card' => ['nullable'],
            'metal_health_id_card' => ['nullable'],
            'is_disabled' => ['nullable'],
            'province_id' => ['nullable'],
            'district_id' => ['nullable'],
            'commune_id' => ['nullable'],
            'village_id' => ['nullable'],
            'reamrk' => ['nullable'],
        ];
    }
}
