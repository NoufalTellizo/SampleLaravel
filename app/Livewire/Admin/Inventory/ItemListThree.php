<?php

namespace App\Livewire\Admin\Inventory;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Livewire\Component;
use Illuminate\Support\Str;

class ItemListThree extends Component
{
    public $items = [], $name, $is_selected = 0, $search ='', $filtered_names =[], $ordering = 0;
    public function render()
    {
        $this->filtered_names = Arr::where($this->items, function($item)
        {
            if($this->search == '')
            {
            return true;
            }
            return Str::startsWith(Str::lower($item['name']), Str::lower($this->search));
        });

        if($this->ordering == 0){
            $this->filtered_names =   array_values(Arr::sort($this->filtered_names, function ($filter) {
                return $filter['name'];
            }));
        }else{
            $this->filtered_names =  array_values(Arr::sortDesc($this->filtered_names, function ($filter) {
                return $filter['name'];
          }));
        }
        
        
        return view('livewire.admin.inventory.item-list-three');
    }
    public function addItem()
    {
        $created_at = Carbon::now();
        $this->validate([
            'name' => 'required'
        ]);
        $item = [
            'name' => $this->name,
            'is_selected' => $this->is_selected,
            'status' => 0,
            'created_at' => $created_at,
        ];
        array_push($this->items, $item);
        $this->name = '';
    }
    public function delete($key)
    {
        array_splice($this->items, $key, 1);
    }
    public function chanageStatus()
    {
        foreach ($this->items as $key => $item)
            if ($item['is_selected'] == 1) {
                $this->items[$key]['status'] = 1;
            }
    }
}