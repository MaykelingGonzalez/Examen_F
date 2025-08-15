<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'supplier_code',
        'supplier_type',
        'company',
        'representative',
        'telephone',
        'email',
        'address'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
