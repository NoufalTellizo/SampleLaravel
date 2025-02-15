<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                        <div>
                            <h3 class="font-extrabold px-2 mt-3">Customers</h3>
                            <input type="text"
                                class=" w-60 border focus:outline-none  focus:border-blue-300  rounded-xl px-4  py-2 ml-2 font-medium placeholder:text-gray-500"
                                placeholder="Search Here" wire:model.live="search">
                        </div>
                        <button class="btn btn-block btn-outline-success mr-3 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            wire:click="resetInputFields">
                            Add New Customer
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Customer Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>IsActive</th>
                                    <th style="width: 40px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr class="align-middle">
                                        <td>{{ $loop->index + 1 }}</td>
                                        {{-- <td>
                                            <div class="flex items-center gap-3">
                                                    <img src="{{ $customer->photo() }}" class="size-12 rounded-full"
                                                        alt="">
                                                    {{ $customer->name }}
                                            </div>
                                        </td> --}}
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>
                                            <div class='flex items-center justify-center'>
                                                <div class="form-check form-switch">
                                                    <input 
                                                    {{-- @if ($customer->is_active == 1) wire:click="disableCustomer({{ $customer->id }})" checked @else wire:click="enableCustomer({{ $customer->id }})" @endif --}} class="form-check-input"
                                                    @if ($customer->is_active ==1 ) wire:click="disableCustomer({{ $customer->id}})" checked 
                                                    @else wire:click="enableCustomer({{ $customer->id}})" 
                                                    @endif
                                                        type="checkbox" role="switch"
                                                        id="customerActive-{{ $customer->id }}">
                                                    <label class="form-check-label"
                                                        for="customerActive-{{ $customer->id }}"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-outline-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editCustomer"
                                                    wire:click="editCustomer({{ $customer->id }})">Edit</button>
                                                <button class="btn btn-block btn-outline-danger mx-2 btn-sm"
                                                    wire:click.prevent="deleteCustomer({{ $customer->id }})"
                                                    wire:confirm= "Are you sure you want to delete the customer?">Delete</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">Name: <span
                                    class="text-red-600">*</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='name'
                                placeholder="Enter the name">
                            @error('name')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">Photo:</label>
                            <input type="file" class="form-control" id="recipient-name" wire:model='image'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-phone_number" class="col-form-label">Phone Number:<span
                                    class="text-red-600">*</label>
                            <input type="number" class="form-control" id="recipient-name" wire:model='phone'
                                placeholder="Enter the Phone Number">
                            @error('phone')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="recipient-email" class="col-form-label">E-mail:<span
                                    class="text-red-600">*</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='email'
                                placeholder="Enter the E-Mail">
                            @error('email')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Address:</label>
                        <textarea class="form-control" id="message-text" wire:model="address" placeholder="Enter the address"></textarea>
                    </div>
                    <div>
                        <input type="checkbox" wire:model="is_active">
                        <label for="is_active" class="">Is Active?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="save">Add</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="editCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">Name: <span
                                    class="text-red-600">*</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='name'
                                placeholder="Enter the name">
                            @error('name')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">Photo:</label>
                            <input type="file" class="form-control" id="recipient-name" wire:model='image'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-phone_number" class="col-form-label">Phone Number:<span
                                    class="text-red-600">*</label>
                            <input type="number" class="form-control" id="recipient-name" wire:model='phone'
                                placeholder="Enter the Phone Number">
                            @error('phone')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="recipient-email" class="col-form-label">E-mail:<span
                                    class="text-red-600">*</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='email'
                                placeholder="Enter the E-Mail">
                            @error('email')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Address:</label>
                        <textarea class="form-control" id="message-text" wire:model="address" placeholder="Enter the address"></textarea>
                    </div>
                    <div>
                        <input type="checkbox" wire:model="is_active">
                        <label for="is_active" class="">Is Active?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="update">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
