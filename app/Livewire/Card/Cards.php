<?php

namespace App\Livewire\Card;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Cards extends Component
{
    #[Layout('components/layouts/layout-new')]
    public function render()
    {
        return view('livewire.card.cards');
    }
}
