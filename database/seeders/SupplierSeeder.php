<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'supplier_code' => 'PROV-0001-001',
            'supplier_type' => 'Mayorista',
            'company' => 'Ferretería Jenny',
            'representative' => 'Fernando Moisés Duarte Osorio',
            'telephone' => '+505 8918-7562',
            'email' => 'ferreteriajenny20@gmail.com',
            'address' => 'De la rotonda El Güegüense 3 cuadras al oeste, Managua, Nicaragua.',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-002',
            'supplier_type' => 'Minorista',
            'company' => 'FETESA',
            'representative' => 'Juan Marcelo Pérez Cruz',
            'telephone' => '+505 1234-5678',
            'email' => 'fetesa2021@gmail.com',
            'address' => 'Del parque central 2 cuadras al norte, 1 cuadra al este, León, Nicaragua.',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-003',
            'supplier_type' => 'Mayorista',
            'company' => 'DIMACO',
            'representative' => 'Pedro Manuel López Rivas',
            'telephone' => '+505 9876-5432',
            'email' => 'dimaco002@gmail.com',
            'address' => 'Del mercado municipal 2 cuadras al oeste, 1 cuadra al sur, Granada, Nicaragua.',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-004',
            'supplier_type' => 'Minorista',
            'company' => 'Ferretería La Económica',
            'representative' => 'Carlos Manuel Rodríguez Osorio',
            'telephone' => '+505 2468-1357',
            'email' => 'laeconomica_1@example.com',
            'address' => 'Del colegio San Francisco 1 cuadra al oeste, 2 cuadras al norte, Ocotal, Nicaragua.',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-005',
            'supplier_type' => 'Mayorista',
            'company' => 'GRUPO SINSA',
            'representative' => 'Eva María Cruz Torrez',
            'telephone' => '+505 1357-2468',
            'email' => 'sinsa_of1@example.com',
            'address' => 'De la gasolinera UNO 1 cuadra al este, 1 cuadra al norte, Jinotepe, Nicaragua.',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-006',
            'supplier_type' => 'Minorista',
            'company' => 'CEMEX NICARAGUA',
            'representative' => 'Ana Lucía Torres Pérez',
            'telephone' => '+505 6543-2109',
            'email' => 'cemex_nicaragua@example.com',
            'address' => 'De los semáforos del Zumen, 3 cuadras al oeste, Managua, Nicaragua',
        ]);
        
    }
}
