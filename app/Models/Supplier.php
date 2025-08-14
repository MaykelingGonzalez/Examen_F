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
        'company',
        'representative',
        'telephone',
        'email',
        'address',
        'type_supplier_id'
    ];

    public function type_supplier()
    {
        return $this->belongsTo(TypeSupplier::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
