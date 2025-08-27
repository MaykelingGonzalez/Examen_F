<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeMovement;

class TypeMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeMovement::create([
            'type_movement_code' => 'TM-0001-001',
            'type_movement' => 'Entrada',
            'description' => 'Compra de productos'
        ]);

        TypeMovement::create([
            'type_movement_code' => 'TM-0001-002',
            'type_movement' => 'Salida',
            'description' => 'Devolución de productos'
        ]);

        TypeMovement::create([
            'type_movement_code' => 'TM-0001-003',
            'type_movement' => 'Entrada',
            'description' => 'Ajuste de inventario'
        ]);

        TypeMovement::create([
            'type_movement_code' => 'TM-0001-004',
            'type_movement' => 'Entrada',
            'description' => 'Recepción de productos'
        ]);

        TypeMovement::create([
            'type_movement_code' => 'TM-0001-005',
            'type_movement' => 'Salida',
            'description' => 'Pérdida de productos'
        ]);

        TypeMovement::create([
            'type_movement_code' => 'TM-0001-006',
            'type_movement' => 'Salida',
            'description' => 'Traslado de productos'
        ]);

    }
}
