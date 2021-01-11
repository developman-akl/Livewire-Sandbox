<div>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="form-group {{ $errors->has('customer_name') ? 'has-error' : '' }}">
            Customer name
            <input type="text" name="customer_name" class="form-control"
                   value="{{ old('customer_name') }}" required>
            @if($errors->has('customer_name'))
                <em class="invalid-feedback">
                    {{ $errors->first('customer_name') }}
                </em>
            @endif
        </div>
        <div class="form-group {{ $errors->has('customer_email') ? 'has-error' : '' }}">
            Customer email
            <input type="email" name="customer_email" class="form-control"
                   value="{{ old('customer_email') }}">
            @if($errors->has('customer_email'))
                <em class="invalid-feedback">
                    {{ $errors->first('customer_email') }}
                </em>
            @endif
        </div>

        <div class="card">
            <div class="card-header">
                Products
            </div>

            <div class="card-body">
                <table class="table" id="products_table">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orderProducts as $index => $orderProduct)
                        <tr>
                            <td>
                                <select name="orderProducts[{{$index}}][product_id]"
                                        wire:model="orderProducts.{{$index}}.product_id"
                                        class="form-control">
                                    <option value="">-- choose product --</option>
                                    @foreach ($allProducts as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->name }} (${{ number_format($product->price, 2) }})
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input 
                                    class="form-control"
                                    type="number"
                                    name="orderProducts[{{$index}}][quantity]"
                                    wire:model="orderProducts.{{$index}}.quantity" 
                                />
                            </td>
                            <td>
                                {{-- BOOTSTRAP DATEPICKER --}}
                                {{-- <input 
                                    wire:model="orderProducts.{{$index}}.delivery_date"
                                    class="form-control datepicker" 
                                    type="text" 
                                    name="orderProducts[{{$index}}][delivery_date]" 
                                    placeholder="ÉÉÉÉ-HH-NN"
                                    autocomplete="off"
                                    data-provide="datepicker"
                                    data-date-autoclose="true" 
                                    data-date-format="yyyy-mm-dd"
                                    data-date-today-highlight="true" 
                                    onchange="this.dispatchEvent(new InputEvent('input'))"
                                > --}}

                                {{-- HTML DATEPICKER --}}
                                {{-- <input 
                                    class="form-control" 
                                    type="text"
                                    id="datepickercucc" 
                                    wire:model="orderProducts.{{$index}}.delivery_date" 
                                    name="orderProducts[{{$index}}][delivery_date]"
                                    onchange="this.dispatchEvent(new InputEvent('input'))"
                                > --}}

                                
                                {{-- ALPINEJS DATE-PICKER COMPONENT --}}
                                <x-date-picker 
                                    id="datepickercucc"
                                    name="orderProducts[{{$index}}][delivery_date]"
                                    wire:model="orderProducts.{{$index}}.delivery_date"
                                />
              

                            </td>
                            <td>
                                <a class="btn btn-danger" href="#" wire:click.prevent="removeProduct({{$index}})">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addProduct">+ Add Another Product</button>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div>
            <input class="btn btn-primary" type="submit" value="Save Order">
        </div>
    </form>
</div>