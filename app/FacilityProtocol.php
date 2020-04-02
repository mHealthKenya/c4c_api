<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FacilityProtocol extends Model
{
    public function getFileAttribute($value)
    {
        return Storage::disk('public')->url($value);
    }

    public function getCreatedAtAttribute($value)
    {
        $date = Carbon::parse($value);
        return $date->isoFormat('MMM Do YYYY');
    }
}