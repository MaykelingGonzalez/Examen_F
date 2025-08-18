<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasureUnit extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'name',
        'symbol'
    ];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
