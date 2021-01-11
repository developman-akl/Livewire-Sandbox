<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $hideable = 'select';
    public $exportable = true;

    public function builder()
    {
        return Order::query();
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            
            NumberColumn::name('id')
                ->label('ID')
                ->searchable()
                ->filterable(),

            Column::name('customer_name')
                ->label('Customer Name')
                ->defaultSort('asc')
                ->searchable()
                ->editable()
                ->filterable(),

            Column::name('customer_email')
                ->label('Customer Email')
                ->searchable()
                ->editable()
                ->filterable(),

                NumberColumn::name('products.id')
                ->label('Products #')
                ->filterable()
        ];
    }

    
    // public function getNAmesProperty()
    // {
    //     return Planet::pluck('name');
    // }
    
}