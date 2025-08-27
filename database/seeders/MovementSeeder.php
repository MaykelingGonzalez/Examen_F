<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Compra de productos (Entrada)
        Movement::create([
            'quantity' => 15,
            'type_movement_id' => 1, // TM-0001-001 Compra
            'product_id' => 1, // Láminas de zinc
            'observations' => 'Compra de láminas de zinc a proveedor Aceros S.A.',
            'user_id' => 1,
        ]);

        Movement::create([
            'quantity' => 100,
            'type_movement_id' => 1, // TM-0001-001 Compra
            'product_id' => 2, // Clavos
            'observations' => 'Compra de clavos galvanizados para reabastecer inventario.',
            'user_id' => 1,
        ]);

        // Recepción desde otra sucursal (Entrada)
        Movement::create([
            'quantity' => 3,
            'type_movement_id' => 4, // TM-0001-004 Recepción de transferencia
            'product_id' => 3, // Taladro Inalámbrico
            'observations' => 'Recepción de taladros enviados por sucursal central.',
            'user_id' => 2,
        ]);

        // Ajuste positivo (Entrada)
        Movement::create([
            'quantity' => 5,
            'type_movement_id' => 3, // TM-0001-003 Ajuste positivo
            'product_id' => 14, // Bloque de concreto
            'observations' => 'Ajuste positivo tras conteo físico de bloques.',
            'user_id' => 1,
        ]);

                // Devolución a proveedor (Salida)
        Movement::create([
            'quantity' => 2,
            'type_movement_id' => 8, // TM-0001-008 Devolución a proveedor
            'product_id' => 4, // Sierra Circular
            'observations' => 'Devolución de sierras circulares defectuosas al proveedor.',
            'user_id' => 2,
        ]);

        // Pérdida (Salida)
        Movement::create([
            'quantity' => 1,
            'type_movement_id' => 11, // TM-0001-011 Pérdida por daño
            'product_id' => 16, // Pintura Látex Blanca
            'observations' => 'Pérdida por daño en lata de pintura durante transporte.',
            'user_id' => 3,
        ]);

        // Traslado a otra sucursal (Salida)
        Movement::create([
            'quantity' => 10,
            'type_movement_id' => 10, // TM-0001-010 Traslado
            'product_id' => 18, // Cable eléctrico
            'observations' => 'Traslado de cable eléctrico a sucursal Managua.',
            'user_id' => 1,
        ]);

        // Devolución de cliente (Salida)
        Movement::create([
            'quantity' => 4,
            'type_movement_id' => 7, // TM-0001-007 Venta (si es devolución de cliente sería Entrada #2, ojo)
            'product_id' => 20, // Manguera de Jardín
            'observations' => 'Cliente devolvió mangueras defectuosas (salida mal clasificada, debería ser entrada TM-0001-002).',
            'user_id' => 2,
        ]);

        // Pérdida (Salida)
        Movement::create([
            'quantity' => 2,
            'type_movement_id' => 11, // TM-0001-011 Pérdida
            'product_id' => 8, // Extintor
            'observations' => 'Extintores vencidos, retirados del inventario.',
            'user_id' => 3,
        ]);

        // Traslado a sucursal (Salida)
        Movement::create([
            'quantity' => 25,
            'type_movement_id' => 10, // TM-0001-010 Traslado
            'product_id' => 15, // Tornillos
            'observations' => 'Traslado de tornillos a ferretería en León.',
            'user_id' => 1,
        ]);


        
    }
}
