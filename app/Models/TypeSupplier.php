<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSupplier extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'type'
    ];

    public function suppliers()
    {
        return $this->hasOne(Supplier::class);
    }
}
