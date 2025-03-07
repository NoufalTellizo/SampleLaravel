<div>
    <div class="card p-3">
        <div class="card-body">
            <div class="">
                <h3 class="">ADDONS MANAGE</h3>
            </div>
            <div class="mb-3 col-md-12">
                <label for="recipient-name" class="col-form-label">AddON Name: <span class="text-red-600">*</label>
                <input type="text" class="form-control hover:bg-slate-200" id="recipient-name" wire:model='addon_name'
                    placeholder="Enter the add-on name">
                @error('addon_name')
                    <span class="text-danger tw-text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex items-end justify-end m-3">
            <button type="button" class="btn btn-success" wire:click="incrementField">+</button>
        </div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Variation</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($addons as $key => $value)
                    <tr>
                        <td>{{ $loop->index + 1 }} </td>
                        <td><input type="text" class="form-control hover:bg-slate-200" id="recipient-name"
                                wire:model='addons.{{ $key }}.variation_name'
                                placeholder="Enter the variation"></td>
                        <td><select class="form-select" wire:model='addons.{{ $key }}.is_active'>
                                <option value="1"> Active</option>
                                <option value="0"> In Active</option>
                            </select></td>
                        <td>
                            <button type="button" class="btn btn-danger"
                                wire:click='deleteField({{ $key }})'>Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            {{-- @if ($addon_item)
                <button type="button" class="btn btn-primary"
                    wire:click.prevent='update({{ $addon_item->id }})'>Submit</button>
            @else
                <button type="button" class="btn btn-primary" wire:click.prevent='save'>Submit</button>
            @endif --}}
            <button type="button" class="btn btn-primary" wire:click.prevent='save'>Submit</button>

        </div>
    </div>
</div>
