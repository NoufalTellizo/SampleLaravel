<?php

namespace App\Livewire\Admin\Orders\POS;

use App\Models\ProductTwo;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductList extends Component
{
    #[Layout('components/layouts/layout-new')]
    public $products, $search= '';
    public function render()
    {
        $this->products = ProductTwo::where('name','like','%'.$this->search.'%')->get();
        return view('livewire.admin.orders.p-o-s.product-list');
    }
}
