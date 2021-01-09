@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                        {{-- <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action">Orders List</a> --}}
                        <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action">Orders List</a>
                        <a href="{{ route('orders.create') }}" class="list-group-item list-group-item-action">Create Order</a>
                        <a href="{{ route('products') }}" class="list-group-item list-group-item-action">Products</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
