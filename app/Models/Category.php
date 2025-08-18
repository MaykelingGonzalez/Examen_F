<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'name',
        'description'
    ];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
