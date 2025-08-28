<?php

namespace App\Exports;

use App\Models\Inventory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventoriesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Inventory::with(['product', 'warehouse'])
            ->get() //Para ejecutar y obtener registros
            ->map(function ($m) { //Transformar los datos para exportarlos
                return [
                    'Producto'        => optional($m->product)->name ?? 'N/A',
                    'Cantidad actual' => $m->current_quantity,
                    'Cantidad mínima' => $m->minimum_quantity,
                    'Cantidad máxima' => $m->maximum_quantity,
                    'Descripción' => $m->description,
                    'Bodega'=> optional($m->warehouse)->name ?? 'N/A',
                    'Fecha de creación' => optional($m->created_at)?->format('d/m/Y H:i'),
                    'Última actualización' => optional($m->updated_at)?->format('d/m/Y H:i'),
                    
                 //El optional() es para evitar errores si o hay registros con las foráneas y N/A que va retornar si no hay nada y $m representa los movimientos
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Producto',
            'Cantidad actual',
            'Cantidad mínima',
            'Cantidad máxima',
            'Descripción',
            'Bodega',
            'Fecha de creación',
            'Última actualización',
        ];
    }
}
