<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'current_quantity',
        'minimum_quantity',
        'maximum_quantity',
        'description',
        'product_id',
        'warehouse_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
