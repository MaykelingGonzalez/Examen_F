<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
     use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'warehouse_code',
        'name',
        'location',
        'responsible_id'
    ];

    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
