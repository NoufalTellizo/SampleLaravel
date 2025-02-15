<?php

namespace App\Livewire\Admin\Expenses;

use App\Models\ExpenseCategory;
use Livewire\Component;

class ExpenseCategoryList extends Component
{
    public $name,$type,$categories,$category;
    public function render()
    {
        $this->categories = ExpenseCategory::latest()->get();
        return view('livewire.admin.expenses.expense-category-list');
    }
    public function resetInputFields()
    {
        $this->name = '';
        $this->type = '';
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'type' => 'required',
        ]);       
        $category = new ExpenseCategory();
        $category ->name = $this->name;
        $category ->type = $this->type;
        $category->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Expense Category has been saved successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function editExpenseCategory($id)
    {
        $category = ExpenseCategory::where('id', $id)->first();

        $this->name = $category->name;
        $this->type = $category->type;
        $this->category = $category;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required'
        ]);
        $category = ExpenseCategory::where('id', $this->category->id)->first();
        $category->name = $this->name;
        $category->type = $this->type;
        $category->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Expense Category has been updated successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function deleteExpenseCategory($id)
    {
        $delete = ExpenseCategory::where('id', $id)->first();
        $delete->delete();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Expense Category has been deleted successfully'
        ]);
    }
}
