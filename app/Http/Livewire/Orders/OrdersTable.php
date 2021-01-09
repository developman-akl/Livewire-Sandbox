<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class OrdersTable extends TableComponent
{
    use HtmlComponents;

    public function query() : Builder
    {
        return Order::withCount('products');
    }

    public function columns() : array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),
            Column::make('Name', 'customer_name')
                ->searchable()
                ->sortable(),
            Column::make('E-mail', 'customer_email')
                ->searchable()
                ->sortable()
                ->format(function(Order $model) {
                    return $this->mailto($model->customer_name, null, ['target' => '_blank']);
                }),
            Column::make('Lines #', 'products_count')
                ->sortable(),
            // Column::make('Actions')
            //     ->format(function(Order $model) {
            //         return view('backend.auth.user.includes.actions', ['user' => $model]);
            //     })
            //     ->hideIf(auth()->user()->cannot('do-this')),
        ];
    }
}