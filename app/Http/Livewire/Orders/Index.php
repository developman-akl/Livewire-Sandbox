<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $categories = [];
    public $sortColumn = 'customer_name';
    public $sortDirection = 'asc';
    public $searchColumns = [
        'id' => '',
        'customer_name' => '',
        'customer_email' => '',
    ];

    public function mount()
    {
        // $this->categories = ProductCategory::pluck('name', 'id');
    }

    public function sortByColumn($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->reset('sortDirection');
            $this->sortColumn = $column;
        }
    }

    public function render()
    {
        $orders = Order::select([
            'id',
            'customer_name',
            'customer_email',
        ]);

        foreach ($this->searchColumns as $column => $value) {
            if (!empty($value)) {
                $orders->where('orders.' . $column, 'LIKE', '%' . $value . '%');
            }
        }

        $orders->orderBy($this->sortColumn, $this->sortDirection);

        return view('livewire.orders.index', [
            'orders' => $orders->paginate(5)
        ]);
    }
}
