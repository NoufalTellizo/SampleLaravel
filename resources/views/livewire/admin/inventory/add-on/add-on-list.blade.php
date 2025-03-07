<div class="">
    <div class="card m-3">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold">ITEMS</h3>
                <a type="button" class="btn btn-primary" href='{{ route('inventory.addonsmanage') }}'>Add Item</a>
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
                                    <th>AddON Name</th>
                                    <th>Variation Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($addons as $addon)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $addon->name }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($addon->variations as $variation)
                                                    <li>{{ $variation->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach ($addon->variations as $variation)
                                                    @if ($variation->is_active == 1)
                                                        <li>Selected</li>
                                                    @else
                                                        <li>Not Selected</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="align-items-center">
                                                    <a class="btn btn-block btn-sm btn-outline-warning mx-2"
                                                        href="{{ route('inventory.addonsmanage', ['id' => $addon->id]) }}">Edit</a>
                                                </div>
                                                <div class="align-items-center">
                                                    <button class="btn btn-block btn-sm btn-outline-danger mx-2"
                                                        wire:click.prevent="delete({{ $addon->id }})">Delete</button>
                                                </div>
                                            </div>
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
