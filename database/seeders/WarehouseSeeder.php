<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::create([
            'warehouse_code'=> 'BOD-001-001',
            'name'=> 'Bodega Central',
            'location'=> 'Sucursal 3',
            'responsible_id'=> 1
        ]);

        Warehouse::create([
            'warehouse_code'=> 'BOD-001-002',
            'name'=> 'Bodega Norte',
            'location'=> 'Estelí',
            'responsible_id'=> 2
        ]);

        Warehouse::create([
            'warehouse_code'=> 'BOD-001-003',
            'name'=> 'Bodega Sur',
            'location'=> 'Estelí',
            'responsible_id'=> 3
        ]);
    }
}
