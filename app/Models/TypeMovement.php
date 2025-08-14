<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMovement extends Model
{
     use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'type_movement'
    ];

    public function movements()
    {
        return $this->hasOne(Movement::class);
    }
}
