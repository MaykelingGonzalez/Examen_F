<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'product_code',
        'name',
        'price',
        'description',
        'category_id',
        'measureUnit_id',
        'supplier_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function measureUnit()
    {
        return $this->belongsTo(MeasureUnit::class, 'measureUnit_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function movement()
    {
        return $this->hasMany(Movement::class);
    }

}
