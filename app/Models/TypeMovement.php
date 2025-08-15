<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMovement extends Model
{
     use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'type_movement_code',
        'type_movement',
        'description'
    ];

    public function movements()
    {
        return $this->hasOne(Movement::class);
    }
}
