<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                        <div>
                            <h3 class="font-extrabold px-2 mt-3">Service Types</h3>
                            <input type="text"
                                class=" w-60 border focus:outline-none  focus:border-blue-300 rounded-xl px-4  py-2 ml-2 font-medium placeholder:text-gray-500"
                                placeholder="Search Here" wire:model.live="search">
                            <div class="text-red-500 mt-2 px-2 ">
                            </div>
                        </div>
                        <div class="tw-flex tw-justify-end">
                            <button class="btn btn-block btn-outline-success mr-3 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                wire:click="resetInputFields">
                                Add New Service Type
                            </button>
                        </div>
                    </div>
                    <div class="p-2 flex items-center justify-evenly text-center">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Service Type</th>
                                    <th>Note</th>
                                    <th style="width: 60px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicetypes as $item)
                                    <tr class="align-middle">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->name }}</td>                                          
                                        <td>{{ $item->description}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-outline-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal"
                                                    wire:click="editServiceType({{ $item->id }})">Edit</button>
                                                <button class="btn btn-block btn-outline-danger mx-2 btn-sm"
                                                    wire:click.prevent="deleteServiceType({{ $item->id }})">Delete</button>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service Type</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Service Type Name:<span
                                class="text-red-600">*</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model='name'
                            placeholder="Enter the Service Type Name">
                        @error('name')
                            <span class="text-danger tw-text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Notes:</label>
                        <textarea type="text" class="form-control" id="recipient-name" wire:model='description'
                            placeholder="Enter the Notes"></textarea>
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service Type</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Service Type Name:<span
                                class="text-red-600">*</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model='name'
                            placeholder="Enter the Service Type Name">
                        @error('name')
                            <span class="text-danger tw-text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Notes:</label>
                        <textarea type="text" class="form-control" id="recipient-name" wire:model='description'
                            placeholder="Enter the Notes"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="update">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
