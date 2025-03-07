<div>
    <div class="card m-3">
        <div class="card-body">
            <div class="">
                <h3 class="">ITEMS</h3>

            </div>
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
    @php
        $count = count(
            array_filter($items, function ($item) {
                return $item['is_selected'] == 1;
            }),
        );
    @endphp
    <div class="card m-3">
        <div class="card-body flex items-center justify-between w-full gap-2">
            <button
                @if ($count > 0) type="button" class="btn btn-primary mb-2" wire:click='chanageStatus' 
                            @else
                            type="button" class="btn btn-primary mb-2 disabled" @endif>Complete Selected</button>
            <input type="search" class="form-control rounded-full mb-2" placeholder="Search" wire:model.live="search" />
            <select class="form-select"  wire:model.live='ordering'>
                <option value="0">Ascending</option>
                <option value="1">Descending</option>
            </select>
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
                                    <th>Is Selected</th>
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
                                @foreach ($filtered_names as $key => $list)
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input"
                                                wire:model.live='items.{{ $key }}.is_selected' value="1">
                                        </td>
                                        <td>{{ $list['name'] }}</td>
                                        <td><select class="form-select"
                                                wire:model.live = 'items.{{ $key }}.status'>
                                                <option value="0"> Pending</option>
                                                <option value="1"> Completed</option>
                                            </select>
                                        </td>
                                        <td>{{ $list['status'] }}</td>
                                        <td>
                                            @if ($list['is_selected'] == 0)
                                                <span>Not Selected</span>
                                            @else
                                                <span>Selected</span>
                                            @endif
                                        </td>
                                        <td>{{ $list['created_at'] }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-block btn-sm btn-outline-danger mx-2"
                                                    wire:click.prevent="delete({{ $key }})">Delete</button>
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
            @foreach ($items as $key => $list)
                <div>
                    @if ($list['is_selected'] == 1)
                        <span>{{ $list['name'] }}</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
