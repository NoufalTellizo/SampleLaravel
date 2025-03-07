<div>
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                        <div>
                            <h3 class="font-extrabold px-2 mt-3">Categories</h3>
                            <input type="text"
                                class=" w-60 border focus:outline-none  focus:border-blue-300  rounded-xl px-4  py-2 ml-2 font-medium placeholder:text-gray-500"
                                placeholder="Search Here" wire:model.live="search">
                        </div>
                        <div class="tw-flex tw-justify-end mr-3">
                            <button class="btn btn-outline-success btn-block btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" wire:click="resetFields">
                                Add New Cateory
                            </button>

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr class="align-middle">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @if ($item->is_active == 0)
                                                Not Selected
                                            @else
                                                Selected
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-sm btn-outline-warning"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    wire:click="edit({{ $item->id }})">Edit</button>
                                                <button class="btn btn-block btn-sm btn-outline-danger mx-2"
                                                    wire:click.prevent="delete({{ $item->id }})">Delete</button>
                                                <button class="btn btn-outline-success btn-block btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#assignModal" wire:click="selectCategory({{ $item->id }})">
                                                    Assign Products
                                                </button>
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
    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Name
                            </label>
                            <input type="text" class="form-control" wire:model="name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Status
                            </label>
                            <select name="" id="" class="form-select" wire:model='is_active'>
                                <option value="1">Selected</option>
                                <option value="0">Not Selected</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="save">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($products as $key => $item)
                            <div class="col-md-6 flex gap-2">
                                <input type="checkbox" class="form-check-input" wire:model="selected_products" value='{{ $item->id }}'>
                                <span>{{ $item->name }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="assignSelectedProducts">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
