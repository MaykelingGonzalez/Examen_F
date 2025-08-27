<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inventarios con datos más lógicos

        Inventory::create([
            'product_id'=> 1, // Láminas de zinc
            'current_quantity'=> 120,
            'minimum_quantity'=> 50,
            'maximum_quantity'=> 200,
            'description'=> 'Láminas para techos en bodega central',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 2, // Clavos
            'current_quantity'=> 250,
            'minimum_quantity'=> 100,
            'maximum_quantity'=> 400,
            'description'=> 'Clavos galvanizados en stock alto por alta demanda',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 3, // Taladro inalámbrico
            'current_quantity'=> 20,
            'minimum_quantity'=> 10,
            'maximum_quantity'=> 40,
            'description'=> 'Taladros portátiles para venta en sucursal norte',
            'warehouse_id'=> 2
        ]);

        Inventory::create([
            'product_id'=> 4, // Sierra Circular
            'current_quantity'=> 15,
            'minimum_quantity'=> 5,
            'maximum_quantity'=> 30,
            'description'=> 'Sierras circulares en bodega central',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 5, // Martillo
            'current_quantity'=> 80,
            'minimum_quantity'=> 30,
            'maximum_quantity'=> 120,
            'description'=> 'Martillos de acero en stock para ferretería',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 6, // Tubo PVC
            'current_quantity'=> 300,
            'minimum_quantity'=> 100,
            'maximum_quantity'=> 500,
            'description'=> 'Tubos PVC para fontanería',
            'warehouse_id'=> 2
        ]);

        Inventory::create([
            'product_id'=> 8, // Extintor PQS 5Lb
            'current_quantity'=> 40,
            'minimum_quantity'=> 15,
            'maximum_quantity'=> 60,
            'description'=> 'Extintores para seguridad industrial',
            'warehouse_id'=> 3
        ]);

        Inventory::create([
            'product_id'=> 9, // Destornillador estrella
            'current_quantity'=> 90,
            'minimum_quantity'=> 30,
            'maximum_quantity'=> 150,
            'description'=> 'Herramientas manuales de uso frecuente',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 10, // Alicate Universal
            'current_quantity'=> 70,
            'minimum_quantity'=> 20,
            'maximum_quantity'=> 120,
            'description'=> 'Alicates en stock en bodega norte',
            'warehouse_id'=> 2
        ]);

        Inventory::create([
            'product_id'=> 11, // Esmeril Angular
            'current_quantity'=> 12,
            'minimum_quantity'=> 5,
            'maximum_quantity'=> 25,
            'description'=> 'Esmeriles para corte de metales',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 12, // Compresor de aire
            'current_quantity'=> 8,
            'minimum_quantity'=> 3,
            'maximum_quantity'=> 15,
            'description'=> 'Compresores de aire portátiles',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 13, // Cemento gris
            'current_quantity'=> 350,
            'minimum_quantity'=> 150,
            'maximum_quantity'=> 500,
            'description'=> 'Cemento Portland para construcción',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 14, // Bloque concreto
            'current_quantity'=> 500,
            'minimum_quantity'=> 200,
            'maximum_quantity'=> 800,
            'description'=> 'Bloques de concreto en bodega sur',
            'warehouse_id'=> 3
        ]);

        Inventory::create([
            'product_id'=> 15, // Tornillos
            'current_quantity'=> 180,
            'minimum_quantity'=> 60,
            'maximum_quantity'=> 250,
            'description'=> 'Tornillos para madera en cajas',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 16, // Pintura blanca
            'current_quantity'=> 60,
            'minimum_quantity'=> 20,
            'maximum_quantity'=> 100,
            'description'=> 'Pintura látex en galones',
            'warehouse_id'=> 2
        ]);

        Inventory::create([
            'product_id'=> 17, // Cerradura
            'current_quantity'=> 40,
            'minimum_quantity'=> 15,
            'maximum_quantity'=> 70,
            'description'=> 'Cerraduras de perilla para puertas',
            'warehouse_id'=> 3
        ]);

        Inventory::create([
            'product_id'=> 18, // Cable eléctrico
            'current_quantity'=> 800,
            'minimum_quantity'=> 300,
            'maximum_quantity'=> 1200,
            'description'=> 'Cable THHN calibre 12 para instalaciones',
            'warehouse_id'=> 1
        ]);

        Inventory::create([
            'product_id'=> 19, // Llave de paso
            'current_quantity'=> 90,
            'minimum_quantity'=> 30,
            'maximum_quantity'=> 150,
            'description'=> 'Llaves de paso PVC para fontanería',
            'warehouse_id'=> 2
        ]);

        Inventory::create([
            'product_id'=> 20, // Manguera de jardín
            'current_quantity'=> 40,
            'minimum_quantity'=> 15,
            'maximum_quantity'=> 80,
            'description'=> 'Mangueras reforzadas para riego',
            'warehouse_id'=> 3
        ]);

    }
}
