<?php

namespace App\Livewire\Admin\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerList extends Component
{
    public $name,$phone,$email,$address,$is_active =true;
    public $customers,$customer;
    public function render()
    {
        $this->customers = Customer::latest()->get();
        return view('livewire.admin.customers.customer-list');
    }
    public function resetInputFields()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->address = '';
        $this->is_active = true;
    }
    public function save()
    {
        $this->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
        $customer = new Customer();
        $customer->name = $this->name;
        $customer->phone = $this->phone;
        $customer->email = $this->email;
        $customer->address = $this->address;
        $customer->is_active = $this->is_active;
        $customer->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Customer has been saved successfully'
        ]);
        $this->dispatch('closemodal');  
    }
    public function editCustomer($id)
    {
        $customer = Customer::where('id', $id)->first();

        $this->name = $customer->name;
        $this->phone = $customer->phone;
        $this->email = $customer->email;
        $this->address = $customer->address;
        $this->is_active = $customer->is_active ==1?true:false;
        $this->customer = $customer;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $customer = Customer::where('id', $this->customer->id)->first();
        $customer->name = $this->name;
        $customer->phone = $this->phone;
        $customer->email = $this->email;
        $customer->address = $this->address;
        $customer->is_active = $this->is_active;
        $customer->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Customer has been updated successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function deleteCustomer($id)
    {
        $delete = Customer::where('id',$id)->first();
        $delete->delete();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Customer has been deleted successfully'
        ]);
    }
    public function enableCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->is_active = 1;
        $customer->save();
    }
    public function disableCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->is_active = 0;
        $customer->save();
    }
}
