<?php

namespace App\Livewire\Admin\Orders;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PosScreen extends Component
{
    #[Layout('components/layouts/pos-layout')]
    public function render()
    {
        return view('livewire.admin.orders.pos-screen');
    }
}
