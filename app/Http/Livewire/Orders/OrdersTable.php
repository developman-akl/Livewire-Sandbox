<?php

namespace App\Http\Livewire\Orders;

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
                ->format(function(User $model) {
                    return $this->mailto($model->email, null, ['target' => '_blank']);
                }),
            Column::make('Actions')
                ->format(function(User $model) {
                    return view('backend.auth.user.includes.actions', ['user' => $model]);
                })
                // ->hideIf(auth()->user()->cannot('do-this')),
        ];
    }
}