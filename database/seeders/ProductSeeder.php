<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\MeasureUnit;
use App\Models\Supplier;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_code' => 'P-001-001',
            'name' => 'Láminas de zinc',
            'price' => 'C$210.50',
            'description' => 'Láminas galvanizadas de alta resistencia, ideales para techos y paredes en proyectos de construcción.',
            'category_id' => 8,
            'measureUnit_id' => 6,
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-002',
            'name' => 'Clavos',
            'price' => 'C$50.00',
            'description' => 'Clavos de acero galvanizado, ideales para la construcción y reparación de estructuras.',
            'category_id' => 9,
            'measureUnit_id' => 5,
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-003',
            'name' => 'Taladro Inalámbrico',
            'price' => 'C$4749.59',
            'description' => 'Taladro inalámbrico 21V, 2 velocidades.',
            'category_id' => 5,
            'measureUnit_id' => 6,
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-004',
            'name' => 'Sierra Circular',
            'price' => 'C$2999.99',
            'description' => 'Sierra circular 7", incluye disco de corte.',
            'category_id' => 6,
            'measureUnit_id' => 6,
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-005',
            'name' => 'Martillo',
            'price' => 'C$150.20',
            'description' => 'Martillo de acero forjado, Tubular 12oz',
            'category_id' => 6,
            'measureUnit_id' => 5,
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-006',
            'name' => 'TUBO PVC',
            'price' => 'C$27.42',
            'description' => 'TUBO PVC CONDUIT 1/2" X 3 MTS',
            'category_id' => 9,
            'measureUnit_id' => 5,
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-007',
            'name' => 'TUBO PVC',
            'price' => 'C$27.42',
            'description' => 'TUBO PVC CONDUIT 1/2" X 3 MTS',
            'category_id' => 9,
            'measureUnit_id' => 5,
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-008',
            'name' => 'Extintor PQS 5Lb',
            'price' => 'C$1200.00',
            'description' => 'Extintor multipropósito de polvo químico seco, capacidad 5Lb.',
            'category_id' => 12, // Seguridad
            'measureUnit_id' => 5, // Libra
            'supplier_id' => 3,
        ]);

        Product::create([
            'product_code' => 'P-001-009',
            'name' => 'Destornillador de Estrella',
            'price' => 'C$95.00',
            'description' => 'Destornillador de estrella con mango ergonómico y punta imantada.',
            'category_id' => 1, // Herramientas Manuales
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-010',
            'name' => 'Alicate Universal',
            'price' => 'C$180.00',
            'description' => 'Alicate universal de acero forjado, 8 pulgadas.',
            'category_id' => 1, // Herramientas Manuales
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-011',
            'name' => 'Esmeril Angular',
            'price' => 'C$3250.00',
            'description' => 'Esmeril angular 4 1/2", 850W, incluye disco de corte.',
            'category_id' => 2, // Herramientas Eléctricas
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-012',
            'name' => 'Compresor de Aire 2HP',
            'price' => 'C$8200.00',
            'description' => 'Compresor portátil de 2 caballos de fuerza, tanque 24L.',
            'category_id' => 3, // Herramientas Neumáticas
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-013',
            'name' => 'Bolsa de Cemento Gris 42.5Kg',
            'price' => 'C$310.00',
            'description' => 'Cemento Portland para uso general en construcción.',
            'category_id' => 4, // Materiales de construcción básicos
            'measureUnit_id' => 2, // Kilogramo
            'supplier_id' => 3,
        ]);

        Product::create([
            'product_code' => 'P-001-014',
            'name' => 'Bloque de Concreto 15x20x40',
            'price' => 'C$25.00',
            'description' => 'Bloque de concreto gris, estándar para construcción de paredes.',
            'category_id' => 4, // Materiales de construcción básicos
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 3,
        ]);

        Product::create([
            'product_code' => 'P-001-015',
            'name' => 'Tornillos para Madera 2"',
            'price' => 'C$85.00',
            'description' => 'Paquete de 100 tornillos para madera con recubrimiento anticorrosivo.',
            'category_id' => 5, // Materiales de construcción fijación
            'measureUnit_id' => 6, // Unidad (paquete)
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-016',
            'name' => 'Pintura Látex Blanca 1 Galón',
            'price' => 'C$450.00',
            'description' => 'Pintura látex blanca para interiores, acabado mate.',
            'category_id' => 6, // Materiales de construcción acabados
            'measureUnit_id' => 7, // Litro
            'supplier_id' => 3,
        ]);

        Product::create([
            'product_code' => 'P-001-017',
            'name' => 'Cerradura de Perilla',
            'price' => 'C$380.00',
            'description' => 'Cerradura de perilla metálica, cromada, para puertas interiores.',
            'category_id' => 7, // Cerrajería
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-018',
            'name' => 'Cable Eléctrico THHN 12AWG',
            'price' => 'C$22.00',
            'description' => 'Cable eléctrico de cobre, calibre 12 AWG, recubierto PVC.',
            'category_id' => 8, // Electricidad
            'measureUnit_id' => 1, // Metro
            'supplier_id' => 2,
        ]);

        Product::create([
            'product_code' => 'P-001-019',
            'name' => 'Llave de Paso PVC 1/2"',
            'price' => 'C$45.00',
            'description' => 'Llave de paso de PVC para instalaciones de agua potable.',
            'category_id' => 9, // Fontanería
            'measureUnit_id' => 6, // Unidad
            'supplier_id' => 1,
        ]);

        Product::create([
            'product_code' => 'P-001-020',
            'name' => 'Manguera de Jardín 15m',
            'price' => 'C$550.00',
            'description' => 'Manguera reforzada para riego, diámetro 1/2".',
            'category_id' => 11, // Jardinería
            'measureUnit_id' => 1, // Metro
            'supplier_id' => 3,
        ]);

    }
}
