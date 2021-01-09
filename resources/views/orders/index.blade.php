@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orders List') }}</div>

                <a href="{{ route('orders.create') }}" class="btn btn-primary">{{ __('Create New Order') }}</a>

                <div class="card-body">
                    {{-- <div>
                        <table class="table table-stripped mt-3">
                            <tr>
                                <th>Id</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Lines #</th>
                                <th></th>
                            </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->customer_email }}</td>
                                    <td>{{ $order->products_count }}</td>
                                    <td>{{ $order->products_count }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div> --}}

                    <livewire:users-table />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
