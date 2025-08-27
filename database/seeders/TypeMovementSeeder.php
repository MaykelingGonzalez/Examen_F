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
        'description' => 'Compra de productos a proveedor'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-002',
        'type_movement' => 'Entrada',
        'description' => 'Devolución de cliente (productos devueltos a inventario)'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-003',
        'type_movement' => 'Entrada',
        'description' => 'Ajuste positivo de inventario (sobrante en conteo físico)'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-004',
        'type_movement' => 'Entrada',
        'description' => 'Recepción de productos transferidos de otra sucursal'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-005',
        'type_movement' => 'Entrada',
        'description' => 'Donación recibida de productos'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-006',
        'type_movement' => 'Entrada',
        'description' => 'Producción interna terminada (entrada de productos fabricados)'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-007',
        'type_movement' => 'Salida',
        'description' => 'Venta de productos a cliente'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-008',
        'type_movement' => 'Salida',
        'description' => 'Devolución a proveedor (productos defectuosos o sobrantes)'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-009',
        'type_movement' => 'Salida',
        'description' => 'Ajuste negativo de inventario (faltante en conteo físico)'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-010',
        'type_movement' => 'Salida',
        'description' => 'Traslado de productos a otra sucursal o almacén'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-011',
        'type_movement' => 'Salida',
        'description' => 'Pérdida por daño, vencimiento o robo'
    ]);

    TypeMovement::create([
        'type_movement_code' => 'TM-0001-012',
        'type_movement' => 'Salida',
        'description' => 'Donación de productos entregados a terceros'
    ]);

    }
}
