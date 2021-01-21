<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CsvImportTrait;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use CsvImportTrait;

    public function create()
    {
    	return view('orders.create');
    }

    public function index()
    {
        $orders = Order::withCount('products')->get();

        return view('orders.index', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
        ]);

        foreach ($request->orderProducts as $product) {
            $order
                ->products()
                ->attach(
                    $product['product_id'],
                    [
                        'quantity' => $product['quantity'],
                        'delivery_date' => $product['delivery_date'],
                    ]
                );
        }

        session()->flash('message', 'Order stored successfully!');

        return redirect()->route('orders.create');

    }
}
