<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'health_id_card' => $this->health_id_card,
            'name_kh' => $this->name_kh,
            'name_en' => $this->name_en,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'nationality' => $this->nationality,
            'occupation' => $this->occupation,
            'phone_number' => $this->phone_number,
            'mental_health_id_card' => $this->mental_health_id_card,
            'other_id_card' => $this->other_id_card,
            'is_disabled' => $this->is_disabled,
            'province' => $this->province,
            'district' => $this->district,
            'commune' => $this->commune,
            'village' => $this->village,
            'province_id' => $this->province_id,
            'district_id' => $this->district_id,
            'commune_id' => $this->commune_id,
            'village_id' => $this->village_id,
            'address' => "{$this->province} {$this->district} {$this->commune} {$this->village}",
            'remark' => $this->remark
        ];
    }
}
