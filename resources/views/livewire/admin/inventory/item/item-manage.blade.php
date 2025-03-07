<div>
    <div class="card p-3">
        <div class="card-body">
            <div class="">
                <h3 class="">ITEMS MANAGE</h3>
            </div>
            <div class="mb-3 col-md-12">
                <label for="recipient-name" class="col-form-label">AddON Name: <span class="text-red-600">*</label>
                <input type="text" class="form-control hover:bg-slate-200" id="recipient-name" wire:model='brand_name'
                    placeholder="Enter the add-on name">
                @error('addon_name')
                    <span class="text-danger tw-text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex items-end justify-end m-3">
            <button type="button" class="btn btn-success" wire:click="addField">+</button>
        </div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Short Code</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($products as $key => $item)
                        <td>{{ $loop->index + 1 }}</td>
                        <td><input type="text" class="form-control" placeholder="Enter ShortCode"
                                wire:model='products.{{ $key }}.shortcode'></td>
                        <td><input type="text" class="form-control" placeholder="Enter Product Name"
                                wire:model='products.{{ $key }}.product_name'></td>
                        <td><select name="" id="" class="form-select" wire:model='products.{{ $key }}.is_active'>
                                <option value="1">Selected</option>
                                <option value="0">Not Selected</option>
                            </select></td>
                        <td><button class="btn btn-outline-danger" wire:click='delete({{ $key }})'>Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            @if ($brand)
                <button type="button" class="btn btn-primary"
                    wire:click.prevent='update({{ $brand->id }})'>Submit</button>
            @else
                <button type="button" class="btn btn-primary" wire:click.prevent='save'>Submit</button>
            @endif

        </div>
    </div>
</div>
