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
            <a href="{{ route('dashboard') }}" type="button" class="btn btn-primary">To Home</a>
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
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox"
                                                wire:model.live='selected_items' value="{{ $key }}"></td>
                                        <td>{{ $list['name'] }}</td>
                                        <td>
                                            <select class="form-select"
                                                wire:model.live = 'items.{{ $key }}.status'>
                                                <option value="0">Pending</option>
                                                <option value="1">Completed</option>
                                            </select>
                                        </td>
                                        <td>{{ $list['status'] }}</td>
                                        <td>{{ $list['created_at'] }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-sm btn-outline-danger mx-2"
                                                    wire:click.prevent="delete ({{ $key }})">Delete</button>
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
                <div class="">{{ $items[$item]['name'] }}</div>
            @endforeach
        </div>
        {{-- <div class="flex flex-col">
            <div class="bg-yellow-500 w-64" wire:dirty>Unsaved Changes Present...</div>
            <div class="" wire:loading>Saving...</div>
        </div> --}}
    </div>
</div>
