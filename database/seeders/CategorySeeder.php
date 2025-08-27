<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Herramientas Manuales',
            'description' => 'Herramientas operadas únicamente por fuerza humana, como martillos, destornilladores, llaves, alicates y sierras manuales, utilizadas para tareas de ensamblaje, corte, ajuste y reparación.'
        ]);

        Category::create([
            'name' => 'Herramientas Eléctricas',
            'description' => 'Equipos que funcionan conectados a la red eléctrica o mediante baterías recargables, como taladros, esmeriladoras, sierras eléctricas y atornilladores, ideales para trabajos que requieren mayor potencia y precisión.'
        ]);

        Category::create([
            'name' => 'Herramientas Neumáticas',
            'description' => 'Herramientas accionadas por aire comprimido, como pistolas de impacto, clavadoras, compresores y llaves neumáticas, empleadas en talleres automotrices y procesos industriales para tareas de montaje y desmontaje rápido.'
        ]);

        Category::create([
            'name' => 'Materiales de construcción básicos',
            'description' => 'Insumos esenciales como cemento, arena, grava, bloques, ladrillos y acero, utilizados en la estructura y cimentación de edificaciones y obras civiles.'
        ]);

        Category::create([
            'name' => 'Materiales de construcción fijación',
            'description' => 'Elementos como tornillos, clavos, pernos, anclajes, taquetes y adhesivos, empleados para unir, sujetar o fijar piezas y materiales en proyectos de construcción y carpintería.'
        ]);

        Category::create([
            'name' => 'Materiales de construcción acabados',
            'description' => 'Productos como pinturas, cerámicas, pisos, azulejos, yeso, selladores y revestimientos, utilizados para dar el toque final estético y funcional a paredes, pisos y techos.'
        ]);

        Category::create([
            'name' => 'Cerrajería',
            'description' => 'Cerraduras, candados, bisagras, pasadores, manijas y accesorios metálicos para puertas, ventanas y portones, enfocados en la seguridad y el control de accesos.'
        ]);

        Category::create([
            'name' => 'Electricidad',
            'description' => 'Cables, interruptores, tomacorrientes, breakers, lámparas, canaletas y herramientas especializadas para la instalación, mantenimiento y reparación de sistemas eléctricos residenciales e industriales.'
        ]);

        Category::create([
            'name' => 'Fontanería',
            'description' => 'Tuberías, grifos, válvulas, accesorios y herramientas para la instalación y reparación de sistemas de agua, desagüe y gas en edificaciones.'
        ]);

        Category::create([
            'name' => 'Menaje',
            'description' => 'Artículos y utensilios para el hogar, incluyendo vajillas, cubiertos, ollas, sartenes y electrodomésticos, destinados a facilitar las tareas de cocina y comedor.'
        ]);

        Category::create([
            'name' => 'Jardinería',
            'description' => 'Herramientas, insumos y accesorios para el cuidado y mantenimiento de jardines, plantas y áreas verdes, incluyendo macetas, tierra, fertilizantes y sistemas de riego.'
        ]);

        Category::create([
            'name' => 'Seguridad',
            'description' => 'Elementos y sistemas destinados a proteger personas y bienes, incluyendo cámaras de seguridad, alarmas, extintores y señalización de emergencia.'
        ]);



    }
}
