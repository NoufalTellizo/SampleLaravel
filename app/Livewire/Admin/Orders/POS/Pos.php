<?php

namespace App\Livewire\Admin\Orders\POS;

use App\Models\ProductTwo;
use Livewire\Component;

class Pos extends Component
{
    public $products;
    public function render()
    {
        $this->products = ProductTwo::where('is_active', 1)
            ->whereHas('category', function ($query) {
                $query->where('is_active', 1);
            })->get();
        return view('livewire.admin.orders.p-o-s.pos');
    }
}
