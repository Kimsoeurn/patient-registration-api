<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLookupData($query)
    {
        return $query->leftJoin('provinces', 'provinces.id', '=', 'patients.province_id')
        ->leftJoin('districts', 'districts.id', '=', 'patients.district_id')
        ->leftJoin('communes', 'communes.id', '=', 'patients.commune_id')
        ->leftJoin('villages', 'villages.id', '=', 'patients.village_id')
        ->select(
            'patients.*',
            'provinces.name_kh as province',
            'districts.name_kh as district',
            'communes.name_kh as commune',
            'villages.name_kh as village'
        );
    }

}
