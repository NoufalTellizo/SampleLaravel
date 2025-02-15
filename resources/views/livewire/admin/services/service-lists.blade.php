<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                        <div>
                            <h3 class="font-extrabold px-2 mt-3">Service Lists</h3>
                            <input type="text"
                                class=" w-60 border focus:outline-none  focus:border-blue-300 rounded-xl px-4  py-2 ml-2 font-medium placeholder:text-gray-500"
                                placeholder="Search Here" wire:model.live="search">
                            <div class="text-red-500 mt-2 px-2 ">
                            </div>
                        </div>
                        <div class="tw-flex tw-justify-end">
                            <button class="btn btn-block btn-outline-success mr-3 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                wire:click="resetInputFields">
                                Add New Service List
                            </button>
                        </div>
                    </div>
                    <div class="p-2 flex items-center justify-evenly text-center">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Service Name</th>
                                    <th>Service Types</th>
                                    <th style="width: 60px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicelists->groupBy('batch_id') as $batch_id=>$batch)
                                    <tr class="align-middle">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $batch->first()->name }}</td>
                                        <td>
                                            <ul  class="mt-2">
                                                @foreach ($batch as $item )
                                                    <li>{{ $item->servicetype?->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-outline-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" wire:click="editServiceList({{ $item->id }})">Edit</button>
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">Service Name:<span
                                    class="text-red-600">*</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='name'
                                placeholder="Enter the name" {{ $isReadOnly ? 'readonly' : ''}}>
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
                            <label for="recipient-phone_number" class="col-form-label">Service List:<span
                                    class="text-red-600">*</label>
                            <select wire:model='servicetype_id' class="form-select">
                                <option>Select Your Service Type</option>
                                @foreach ($servicetypes as $item)
                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('servicetype_id')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="recipient-email" class="col-form-label">Price:<span
                                    class="text-red-600">*</label>
                            <input type="number" class="form-control" id="recipient-name" wire:model='price'
                                placeholder="Enter the Price">
                            @error('price')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4 col-md-2 flex items-center justify-center">
                            <button type="button" class="btn btn-primary w-full"
                                wire:click.prevent="addServiceList">Add</button>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($servicelist as $key => $item)
                            <div class="mb-3 col-md-6">
                                <div class="flex items-end justify-end relative z-10">
                                    <button class="bg-red-400 text-white rounded-md" wire:click="removeServiceItem({{ $key }})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z" />
                                        </svg></button>
                                </div>
                                <div class="card flex flex-col items-center justify-center absolute right-1 -top-3 z-0">
                                    <label>{{ $servicetypeNames[$item['servicetype_id']] }}</label>
                                    <label>{{ $item['price'] }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="save">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">Service Name:<span
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
                            <label for="recipient-phone_number" class="col-form-label">Service List:<span
                                    class="text-red-600">*</label>
                            <select wire:model='servicetype_id' class="form-select">
                                <option>Select Your Service Type</option>
                                @foreach ($servicetypes as $item)
                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('servicetype_id')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="recipient-email" class="col-form-label">Price:<span
                                    class="text-red-600">*</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='price'
                                placeholder="Enter the Price">
                            @error('price')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4 col-md-2 flex items-center justify-center">
                            <button type="button" class="btn btn-primary w-full"
                                wire:click.prevent="addServiceList">Add</button>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($servicelist as $key => $item)
                            <div class="mb-3 col-md-6">
                                <div class="card flex flex-col items-center justify-center">
                                    <label>{{ $servicetypeNames[$item['servicetype_id']] }}</label>
                                    <label>{{ $item['price'] }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="save">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>