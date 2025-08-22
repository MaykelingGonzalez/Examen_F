<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'responsible_code',
        'name',
        'identification',
        'birthdate',
        'birthplace',
        'age',
        'sex',
        'telephone',
        'email',
        'country',
        'nationality',
        'department',
        'municipality',
        'address',
        'marital_status',
        'academic_level'
    ];

    public function warehouse()
    {
        return $this->hasOne(Warehouse::class);
    }
}
