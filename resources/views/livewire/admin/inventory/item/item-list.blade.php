<div class="">
    <div class="card m-3">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold">ITEMS</h3>
                <a type="button" class="btn btn-primary" href='{{ route('inventory.itemsmanage') }}'>Add Item</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Brand Name</th>
                                    <th>Product Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($brands as $item)
                                    <tr>
                                        <td>#1</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($item->products as $product)
                                                    <li>{{ $product->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach ($item->products as $product)
                                                    <li>
                                                        @if ($product->is_active == 0)
                                                            Not Selected
                                                        @else
                                                            Selected
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td><a class="btn btn-outline-warning"
                                                href="{{ route('inventory.itemsmanage', ['id' => $item->id]) }}">Edit</a>
                                            <button class="btn btn-outline-danger"
                                                wire:click="delete({{ $item->id }})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
