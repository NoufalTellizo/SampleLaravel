<div>
    <div class="card m-3">
        <div class="card-body">
            <h3 class="border-b-2">ITEMS</h3>
            <div class="mb-3 col-md-12">
                <label for="recipient-name" class="col-form-label">Name: <span class="text-red-600">*</label>
                <input type="text" class="form-control hover:bg-slate-200" id="recipient-name" wire:model='name'
                    placeholder="Enter the name">
                @error('name')
                    <span class="text-danger tw-text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="button" class="btn btn-primary" wire:click='addItem'>Submit</button>
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
                                <button class="btn btn-block btn-sm btn-outline-warning mb-2" wire:click="">Mark As
                                    Completed</button>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Current Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                    {{-- <th>Towards</th>
                                    <th>Payment Mode</th>
                                    <th>Created By</th>
                                    <th>Notes</th>
                                    <th style="width: 40px">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $list)
                                    <tr class="align-middle">
                                        <td><input class="form-check-input" type="checkbox"
                                                wire:model.live='selected_items' value="{{ $key }}"></td>
                                        <td>{{ $list['name'] }}</td>
                                        <td>
                                            <select class="form-select"
                                                wire:model.live='items.{{ $key }}.status'>
                                                <option value="0">Pending</option>
                                                <option value="1">Completed</option>
                                            </select>
                                        </td>
                                        <td>
                                            @if ($list['status'] == 0)
                                                <span class="badge text-bg-warning">Pending</span>
                                            @else
                                                <span class="badge text-bg-success">Completed</span>
                                            @endif
                                        </td>
                                        <td>{{ $list['created_at'] }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-sm btn-outline-danger mx-2"
                                                    wire:click.prevent="deleteArray ({{ $key }})">Delete</button>
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
        <div class="card p-2">
            @foreach ($selected_items as $key => $item)
                <div>{{ $items[$item]['name'] }}</div>
            @endforeach
        </div>
    </div>

</div>
{{-- <td>
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
                                        <td>{{ $expense->description }}</td> --}}
