<?php

namespace App\Livewire\Admin\Services;

use App\Models\ServiceType;
use Livewire\Component;

class ServiceTypes extends Component
{
    public $name,$description,$servicetypes,$servicetype;
    public function render()
    {
        $this->servicetypes = ServiceType::latest()->get();
        return view('livewire.admin.services.service-types');
    }
    public function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
    }
    public function save()
    {
        $this->validate([
            'name'=>'required'
        ]);
        $servicetype = new ServiceType();
        $servicetype->name = $this->name;
        $servicetype->description = $this->description;
        $servicetype->save();
        $this->resetInputFields();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Service Type has been added successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function editServiceType($id)
    {
        $servicetype = ServiceType::find($id);
        $this->name = $servicetype->name;
        $this->description = $servicetype->description;
        $this->servicetype = $servicetype;
    }
    public function update()
    {
        $servicetype = ServiceType::where('id',$this->servicetype->id)->first();
        $servicetype->name = $this->name;
        $servicetype->description = $this->description;
        $servicetype->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Service Type updated successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function deleteServiceType($id)
    {
        $servicetype = ServiceType::find($id);
        $servicetype->delete();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Service Type deleted successfully'
        ]);
    }
}
