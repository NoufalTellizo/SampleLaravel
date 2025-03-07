<?php

namespace App\Livewire\Admin\Inventory\Item;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;

class ItemList extends Component
{
    public $brands, $products;
    public function render()
    {
        return view('livewire.admin.inventory.item.item-list');
    }
    public function mount()
    {
        $this->brands = Brand::latest()->get();
        $this->products = Product::latest()->get();
    }
    public function delete($id)
    {
        Brand::where('id', $id)->delete();
    }
}
