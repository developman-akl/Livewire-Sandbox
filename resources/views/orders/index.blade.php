{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orders List') }}</div>

                <a href="{{ route('orders.create') }}" class="btn btn-primary">{{ __('Create New Order') }}</a>

                <div class="card-body">

                        <div class="px-4 lg:px-16 xl:px-32">
                            <div class="py-10 space-y-8">
                                <livewire:orders.orders-table 
                                    model="App\Models\Order"
                                    include="id, customer_name, customer_email, products_count"
                                />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}



@extends('layouts.app')
@section('content')
{{-- <div class="card"> --}}
    <div class="card-header">{{ __('Orders List') }}</div>

    <div class="card-body">

        <a href="{{ route('orders.create') }}" class="btn btn-primary">{{ __('Create New Order') }}</a>
        <div class="px-4 lg:px-16 xl:px-32">
            <div class="py-10 space-y-8">
                <livewire:orders.orders-table 
                    model="App\Models\Order"
                />
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
