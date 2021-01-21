<div>
    <table class="table">
        <thead>
        <tr>
            <th class="w-25" wire:click="sortByColumn('id')">
                ID
                @if ($sortColumn == 'id')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
            <th class="w-25" wire:click="sortByColumn('customer_name')">
                Customer Name
                @if ($sortColumn == 'customer_name')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
            <th class="w-25" wire:click="sortByColumn('customer_email')">
                Customer Email
                @if ($sortColumn == 'customer_email')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
        </tr>
        <tr>
            <td>
                <input type="search" class="form-control" wire:model="searchColumns.id"/>
            </td>
            <td>
                <input type="search" class="form-control" wire:model="searchColumns.customer_name"/>
            </td>
            <td>
                <input type="search" class="form-control" wire:model="searchColumns.customer_email"/>
            </td>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->customer_email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
</div>
