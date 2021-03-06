<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodPressureReading extends Model
{
    protected $fillable = ['patient_id', 'value'];
    use HasFactory;
}
