<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['full_name', 'date_of_birth', 'email', 'phone', 'address'];
    use HasFactory;

    public function bpreadings()
    {
        return $this->hasMany(BloodPressureReading::class);
    }
}
