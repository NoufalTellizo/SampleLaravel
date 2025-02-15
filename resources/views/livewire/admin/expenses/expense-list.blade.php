<div>
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                        <div>
                            <h3 class="font-extrabold px-2 mt-3">Expenses</h3>
                            <input type="text"
                                class=" w-60 border focus:outline-none  focus:border-blue-300  rounded-xl px-4  py-2 ml-2 font-medium placeholder:text-gray-500"
                                placeholder="Search Here" wire:model.live="search">
                        </div>
                        <div class="tw-flex tw-justify-end mr-3">
                            <button class="btn btn-outline-success btn-block btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                wire:click="resetInputFields">
                                Add New Expense
                            </button>
                        </div>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Towards</th>
                                    <th>Payment Mode</th>
                                    <th>Created By</th>
                                    <th>Notes</th>
                                    <th style="width: 40px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $expense)
                                    <tr class="align-middle">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->category?->name }}</td>
                                        <td>
                                            @if ($expense->payment_method == 1)
                                                <span>Cash</span>
                                            @elseif ($expense->payment_method == 2)
                                                <span>UPI</span>
                                            @elseif ($expense->payment_method == 3)
                                                <span>Card</span>
                                            @elseif ($expense->payment_method == 4)
                                                <span>Cheque</span>
                                            @elseif ($expense->payment_method == 5)
                                                <span>Bank Transfer</span>
                                            @endif
                                        </td>
                                        <td>{{ $expense->created_by }}</td>
                                        <td>{{ $expense->description }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-sm btn-outline-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editExpense"
                                                    wire:click="editExpense({{ $expense->id }})">Edit</button>
                                                <button class="btn btn-block btn-sm btn-outline-danger mx-2"
                                                    wire:click.prevent="deleteExpense({{ $expense->id }})">Delete</button>
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Expense</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Date
                            </label>
                            <input type="date" class="form-control" wire:model="date">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Expense
                                Category
                                <span class="text-danger">*</span></label>
                            <select name="" id="category_id" class="form-select radius-8"
                                wire:model="category_id">
                                <option value="">Select Your category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger tw-text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Expense
                                Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control radius-8" placeholder="Enter Amount"
                                wire:model="amount">
                            @error('amount')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Payment
                                Mode <span class="text-danger">*</span></label>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="radio" id="cash" class="form-check-input"
                                        wire:model="payment_method" value="1">
                                    <label for="cash" class="ml-2">Cash</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="upi" class="form-check-input"
                                        wire:model="payment_method" value="2">
                                    <label for="upi" class="ml-2">UPI</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="card" class="form-check-input"
                                        wire:model="payment_method" value="3">
                                    <label for="card" class="ml-2">Card</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="cheque" class="form-check-input"
                                        wire:model="payment_method" value="4">
                                    <label for="cheque" class="ml-2">Cheque</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="bank_transfer" class="form-check-input"
                                        wire:model="payment_method" value="5">
                                    <label for="bank_transfer" class="ml-2">Bank Transfer</label>
                                </div>
                            </div>
                            @error('payment_method')
                                <span class="text-danger tw-text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Notes
                        </label>
                        <textarea class="form-control radius-8" placeholder="Enter Notes" wire:model="description"></textarea>
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
    <div class="modal fade" id="editExpense" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
            <div class="modal-content radius-16 bg-base">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Expense</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Date
                            </label>
                            <input type="date" class="form-control radius-8" wire:model="date">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Expense
                                Category
                                <span class="text-danger">*</span></label>
                            <select name="" id="category_id" class="form-select radius-8"
                                wire:model="category_id">
                                <option value="">Select Your category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger tw-text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Expense
                                Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control radius-8" placeholder="Enter Amount"
                                wire:model="amount">
                            @error('amount')
                                <span class="text-danger tw-text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="name" class="col-form-label">Payment
                                Mode <span class="text-danger">*</span></label>
                            <select name="" id="" class="form-select radius-8"
                                wire:model="payment_method">
                                <option value="">
                                    Choose Payment Mode
                                </option>
                                <option class="select-box" value="1">
                                    Cash
                                </option>
                                <option class="select-box" value="2">
                                    UPI
                                </option>
                                <option class="select-box" value="3">
                                    Card
                                </option>
                                <option class="select-box" value="4">
                                    Cheque
                                </option>
                                <option class="select-box" value="5">
                                    Bank Transfer
                                </option>
                            </select>
                            @error('payment_method')
                                <span class="text-danger tw-text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Notes
                        </label>
                        <textarea class="form-control radius-8" placeholder="Enter Notes" wire:model="description"></textarea>
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
