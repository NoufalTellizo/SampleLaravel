<?php

namespace App\Livewire\Admin\Services;

use App\Models\ServiceList;
use App\Models\ServiceType;
use Livewire\Component;

class ServiceLists extends Component
{
    public $name, $servicetype_id, $price, $servicelist = [], $servicetypes, $servicelists, $servicetypeNames, $isReadOnly = false, $batch_id, $existingServices;
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
        $this->name = '';
        $this->servicelist = [];
        $this->price = '';
        $this->servicetype_id = '';
        $this->resetErrorBag();
    }
    public function addServiceList()
    {
        if (!$this->batch_id) {
            $this->batch_id = uniqid();
        }
        $this->validate([
            'name' => 'required',
            'servicetype_id' => 'required',
            'price' => 'required'
        ]);
        $items = [
            'batch_id' => $this->batch_id,
            'name' => $this->name,
            'servicetype_id' => $this->servicetype_id,
            'price' => $this->price,
        ];
        array_push($this->servicelist, $items);
        $this->isReadOnly = true;
        $this->price = '';
    }
    public function save()
    {
        $batch_id = uniqid();
        foreach ($this->servicelist as $item) {
            ServiceList::create([
                'batch_id' => $batch_id,
                'name' => $item['name'],
                'servicetype_id' => $item['servicetype_id'],
                'price' => $item['price']
            ]);
        }
        $this->servicelist = [];
        $this->name = '';
        $this->isReadOnly = false;
        $this->resetErrorBag();
        $this->dispatch('notify', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Service List has been added successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function deleteServiceType($batch_id)
    {
        $servicelist = ServiceList::where('batch_id', $batch_id)->first();
        ServiceList::where('batch_id', $servicelist->batch_id)->delete();
        $this->dispatch('notify', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Service List has been deleted successfully'
        ]);
    }
    public function removeServiceItem($key)
    {
        if (array_key_exists($key, $this->servicelist)) {
            unset($this->servicelist[$key]);
        }
    }
    public function editServiceList($batch_id)
    {
        $this->batch_id = $batch_id;
        $service = ServiceList::where('batch_id', $batch_id)->first();
        if ($service) {
            $this->name = $service->name;
            $this->servicelist = ServiceList::where('batch_id', $batch_id)->get()->toArray();
            $this->servicetype_id = $service->servicetype_id;
            $this->price = $service->price;
        }
    }
    public function addServiceListUpdate()
    {
        $this->validate([
            'name' => 'required',
            'servicetype_id' => 'required',
            'price' => 'required',
        ]);
        $items = [
            'batch_id' => $this->batch_id,
            'name' => $this->name,
            'servicetype_id' => $this->servicetype_id,
            'price' => $this->price,
        ];
        array_push($this->servicelist, $items);
    }
    public function update()
    {
        $updated_name = ServiceList::where('batch_id', $this->batch_id)->update(['name' => $this->name]);
        foreach ($this->servicelist as $item) {
            $existingServices = ServiceList::where('batch_id', $item['batch_id'])
                ->where('servicetype_id', $item['servicetype_id'])
                ->where('price', $item['price'])
                ->exists();

        if(!$existingServices)
        {
            ServiceList::create([
                'batch_id' => $item['batch_id'],
                'name' =>$item['name'],
                'servicetype_id' =>$item['servicetype_id'],
                'price' =>$item['price']
            ]);
        }
        }
        $this->servicelist = [];
        $this->name = '';
        $this->resetErrorBag();
        $this->dispatch('notify', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Service List has been updated successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function removeService($key)
    {
        $item = $this->servicelist[$key];
        $deleteRow = ServiceList::find($item['id']);
        $deleteRow->delete();
        unset($this->servicelist[$key]);
        $this->servicelist = array_values($this->servicelist);
    }
}