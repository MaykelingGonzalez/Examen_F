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
            'company' => 'Ferretería Jenny S.A',
            'representative' => 'Fernando Moisés Duarte Osorio',
            'telephone' => '+505 8918-7562',
            'email' => 'proveedor1@example.com',
            'address' => 'Costado Sureste Escuela el Rosario 1c al Sur y 1/2C al este',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-002',
            'supplier_type' => 'Minorista',
            'company' => 'Ferretería Juan S.A',
            'representative' => 'Juan Pérez',
            'telephone' => '+505 1234-5678',
            'email' => 'proveedor2@example.com',
            'address' => 'Costado Noreste Escuela el Rosario 1c al Sur y 1/2C al este',
        ]);

        Supplier::create([
            'supplier_code' => 'PROV-0001-003',
            'supplier_type' => 'Mayorista',
            'company' => 'Ferretería Pedro S.A',
            'representative' => 'Pedro López',
            'telephone' => '+505 9876-5432',
            'email' => 'proveedor3@example.com',
            'address' => 'Costado Sureste Escuela el Rosario 1c al Sur y 1/2C al este',

        ]);
    }
}
