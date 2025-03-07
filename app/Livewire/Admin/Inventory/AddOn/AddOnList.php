<?php

namespace App\Livewire\Admin\Inventory\AddOn;

use App\Models\AddOn;
use App\Models\Variation;
use Livewire\Component;

class AddOnList extends Component
{
    public $addons, $variations;
    public function render()
    {
        return view('livewire.admin.inventory.add-on.add-on-list');
    }
    public function mount()
    {
        $this->addons = AddOn::latest()->get();
        $this->variations = Variation::latest()->get();
    }
    public function delete($id)
    {
        $delete = AddOn::where('id', $id);
        $delete->delete();
    }
}
