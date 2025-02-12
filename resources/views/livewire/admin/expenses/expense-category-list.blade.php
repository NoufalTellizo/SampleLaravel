<div>
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                        <div>
                            <h3 class="font-extrabold px-2 mt-3">Expense Categories</h3>
                            <input type="text"
                                class=" w-60 border focus:outline-none  focus:border-blue-300 rounded-xl px-4  py-2 ml-2 font-medium placeholder:text-gray-500"
                                placeholder="Search Here" wire:model.live="search">
                            <div class="text-red-500 mt-2 px-2 ">
                                </div>
                        </div>
                        <div class="tw-flex tw-justify-end">
                            <button class="btn btn-success mr-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" wire:click="resetInputFields()">
                                Add New Category
                            </button>
                        </div>
                    </div> <!-- /.card-header -->
                    <div class="p-2 flex items-center justify-evenly text-center">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Expense Category</th>
                                    <th>Status</th>
                                    <th style="width: 60px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="align-middle">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $category->name }}</td>                                          
                                        <td>
                                            @if ($category->type == 1)
                                                <p>Assets</p>
                                            @elseif ($category->type == 2)
                                                <p>Liability</p>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editExpenseCategory"
                                                    wire:click="editExpenseCategory({{ $category->id }})">Edit</button>
                                                <button class="btn btn-danger mx-2"
                                                    wire:click.prevent="deleteExpenseCategory({{ $category->id }})">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Expense Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Expense Category:<span
                                class="text-red-600">*</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model='name'
                            placeholder="Enter the Category">
                        @error('name')
                            <span class="text-danger tw-text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <p>Category Type<span class="text-red-600">*</span></p>             
                        <select class="form-control tw-mt-2" id="class_id" wire:model="type">
                            <option value="">Choose Expense Category</option>
                            <option value="1">Assets</option>
                            <option value="2">Liability</option>
                        </select>
                        @error('type')      
                            <span class="text-danger tw-text-xs">{{ $message }}</span>
                        @enderror
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
    <div class="modal fade" id="editExpenseCategory" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category Type</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Category Name:</label>
                        <input type="text" class="form-control" id="recipient-category" wire:model='name'
                            placeholder="Enter the Expense Category">
                        @error('name')
                            <span class="text-danger tw-text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <p>Category Type<span class="text-red-600">*</span></p>
                        <select class="form-control tw-mt-2" id="class_id" wire:model="type">
                            <option value="">Choose Expense Category</option>
                            <option value="1">Assets</option>
                            <option value="2">Liability</option>
                        </select>
                        @error('type')
                            <span class="text-danger tw-text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="update">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>
