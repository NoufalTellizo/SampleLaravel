<?php

namespace App\Livewire\Admin\Services;

use App\Models\ServiceList;
use App\Models\ServiceType;
use Livewire\Component;

class ServiceLists extends Component
{
    public $name, $servicetype_id, $price, $servicelist = [], $servicetypes, $servicelists, $servicetypeNames, $isReadOnly = false;
    public function render()
    {
        $this->servicelists = ServiceList::all();
        return view('livewire.admin.services.service-lists');
    }
    public function mount()
    {
        $this->servicetypes = ServiceType::all();
        $this->servicetypeNames = ServiceType::pluck('name', 'id')->toArray(); 
    }
    public function resetInputFields()
    {
        $this->price = '';
        $this->servicetype_id = '';
        $this->resetErrorBag();
    }
    public function addServiceList()
    {
        $this->validate([
            'name' => 'required',
            'servicetype_id' => 'required',
            'price' => 'required'
        ]);
        $items = [
            'name' => $this->name,
            'servicetype_id' => $this->servicetype_id,
            'price' => $this->price,
        ];
        array_push($this->servicelist, $items);
        $this->isReadOnly = true;
        $this->resetInputFields();
    }
    public function save()
    {
        $batch_id =uniqid();
        foreach ($this->servicelist as $item) {
            ServiceList::create([
                'batch_id'=>$batch_id,
                'name' => $item['name'],
                'servicetype_id' => $item['servicetype_id'],
                'price' => $item['price']
            ]);
        }
        $this->servicelist = [];
        $this->name ='';
        $this->isReadOnly = false;
        $this->resetErrorBag();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Service List has been added successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function deleteServiceType($id)
    {
        $servicelist = ServiceList::find($id);    
        ServiceList::where('batch_id', $servicelist->batch_id)->delete();
    }
    public function removeServiceItem($key)
    {
        if (array_key_exists($key, $this->servicelist)) {
            unset($this->servicelist[$key]); 
        }
    }
    public function editServiceList($id)
    {
        $this->servicelist = [];

        $items = [
            'name'=>$this->name,
            'servicetype_id'=>$this->servicetype_id,
            'price'=>$this->price,
        ];       
        array_push($this->servicelist, $items);
        // $this->name = $servicelist->name;
        // $this->servicetype_id = $servicelist->servicetype_id;
        // $this->price = $servicelist->price;
        // $this->servicelist = $servicelist;
    }
}
