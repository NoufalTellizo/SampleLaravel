<div class="">
    <div class="container-fluid">
        <div class="flex items-center justify-between">
            <h3 class="font-semibold">ITEMS</h3>
        </div>
        <div class="row">
            <div class="col-md-12 p-3 items-center">
                <div class="card mb-4">
                    <div class="p-2 flex items-center justify-between">
                    </div>
                    <div class="card-body ">
                        <div class="grid grid-cols-4 p-2 mt-2 gap-2 " >
                            @foreach ($products as $item)
                                <div
                                    class="bg-neutral-200 p-4 text-neutral-50 flex flex-col items-center justify-center gap-3 rounded" wire:poll.visible>
                                    <span class="font-semibold text-neutral-900">{{ $item->name }}</span>
                                    <span class="font-semibold text-neutral-700">Price: {{ $item->price }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>