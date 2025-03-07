<?php

namespace App\Livewire\Admin\Inventory;

use Carbon\Carbon;
use Livewire\Component;

class ItemListTwo extends Component
{
    public $items =[], $name;
    public $selected_items =[];
    public function render()
    {
        return view('livewire.admin.inventory.item-list-two');
    }
    // To add to array
    public function addItem()
    {
        $created_at = Carbon::now();
        $this->validate([
            'name' => 'required'
        ]);
        $item = [
            'name' => $this->name,
            'status' => 0,
            'created_at' =>$created_at,
        ];
        array_push($this->items, $item);
        // dd($this->items);
    }
    // To change particular status
    public function changeStatus($key)
    {
        $this->items[$key]['status'] = $this->status;
    }
    // To remove from array
    public function delete($key)
    {
        array_splice($this->items, $key, 1);
    }
}
