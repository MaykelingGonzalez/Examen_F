<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuppliersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplier::select([
            'supplier_code',
            'company',
            'representative',
            'telephone',
            'email',
            'address',
            'type_supplier_id'
        ])->get();
    }

    public function headings(): array
    {
        return [
            'Código de Proveedor',
            'Compañía',
            'Representante',
            'Teléfono',
            'Email',
            'Dirección',
            'Tipo de Proveedor'
        ];
    }
}
