<?php

namespace App\Livewire\Admin\Inventory;

use Carbon\Carbon;
use Livewire\Component;

class ItemList extends Component
{
    public $name, $items = [], $status= 0, $id =0;
    public $selected_items =[];
    public function render()
    {
        return view('livewire.admin.inventory.item-list');
    }
    public function changeStatus($key) 
    {
        $this->items[$key]['status'] = $this->status;
    }
    public function addItem()
    {
        $created_at = Carbon::now();
        $this->validate([
            'name' => 'required',
        ]);
        $item = [
            'name' => $this->name,
            'status' => $this->status,
            'created_at' => $created_at,
        ];
        array_push($this->items, $item);
    }
    public function deleteArray($id)
    {
        array_splice($this->items, $id);
    }
}