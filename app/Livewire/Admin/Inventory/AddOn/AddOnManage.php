<?php

namespace App\Livewire\Admin\Inventory\AddOn;

use App\Models\AddOn;
use App\Models\Variation;
use Livewire\Component;

class AddOnManage extends Component
{
    public $addon_name, $addons = [], $addon_item;
    public function render()
    {
        return view('livewire.admin.inventory.add-on.add-on-manage');
    }
    public function mount($id = null)
    {
        if ($id) {
            $this->addon_item = AddOn::where('id', $id)->first();
            $this->addon_name = $this->addon_item->name;
        }
        $variations = Variation::where('addon_id', $id)->get();
        foreach ($variations as $variation) {
            $addon = [
                'variation_name' => $variation['name'],
                'is_active' => $variation['is_active']
            ];
            array_push($this->addons, $addon);
        }
    }
    public function incrementField()
    {
        $addon = [
            'variation_name' => '',
            'is_active' => 1
        ];
        array_push($this->addons, $addon);
    }
    public function deleteField($key)
    {
        array_splice($this->addons, $key, 1);
    }
    public function resetInputFields()
    {
        $this->addon_name = '';
    }
    public function save()
    {
        $this->validate([
            'addon_name' => 'required',
        ]);
        if ($this->addon_item) 
        {
            $addon = $this->addon_item;
            Variation::where('addon_id', $addon->id)->delete();
        } else 
        {
            $addon = new AddOn();
        }
            $addon->name =  $this->addon_name;
            $addon->save();

            foreach ($this->addons as $item) {
                $newVariation = new Variation();
                $newVariation->addon_id = $addon->id;
                $newVariation->name = $item['variation_name'];
                $newVariation->is_active = $item['is_active'];
                $newVariation->save();
            }
        $this->resetInputFields();
        $this->addons = [];
        return redirect()->route('inventory.addonslist');
    }
}
