<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'quantity',
        'observations',
        'type_movement_id',
        'product_id',
        'user_id'   
    ];

    public function typeMovement()
    {
        return $this->belongsTo(TypeMovement::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
