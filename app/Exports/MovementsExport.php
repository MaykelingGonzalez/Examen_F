<?php

namespace App\Exports;

use App\Models\Movement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MovementsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Movement::select([
            'quantity',
            'observations',
            'type_movement_id',
            'product_id',
            'user_id',
        ]);
    }

    public function headings(): array
    {
        return [
            'Cantidad',
            'Observaciones',
            'Tipo de Movimiento',
            'Producto',
            'Usuario',
        ];
    }
}
