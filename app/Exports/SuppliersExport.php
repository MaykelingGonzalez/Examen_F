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
            'supplier_type',
            'company',
            'representative',
            'telephone',
            'email',
            'address',
        ])->get();
    }

    public function headings(): array
    {
        return [
            'Código de Proveedor',
            'Tipo de Proveedor',
            'Empresa',
            'Nombre del representante',
            'Teléfono',
            'Email',
            'Dirección',
        ];
    }
}
