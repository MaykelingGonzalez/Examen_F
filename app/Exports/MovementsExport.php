<?php

namespace App\Exports;

use App\Models\Movement;
use App\Models\User;
use App\Models\Product;
use App\Models\TypeMovement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MovementsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $movements;

    public function __construct($movements)
    {
        $this->movements = $movements;
    }
    public function collection()
    {

        return $this->movements->map(function($movements){
            
            return [
                'quantity' => $movements->quantity,
                'observations' => $movements->observations,
                'type_movement_id' => $movements->typeMovement->name,
                'product_id' => $movements->product->name,
                'user_id' => $movements->user->name,
            ];
        });
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
