<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AdminPanel extends Component
{
    #[Layout('components/layouts/new-layout')]
    public function render()
    {
        return view('livewire.admin.admin-panel');
    }
}
