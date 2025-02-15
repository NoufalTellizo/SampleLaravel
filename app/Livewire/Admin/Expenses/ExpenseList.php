<?php

namespace App\Livewire\Admin\Expenses;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExpenseList extends Component
{
    public $date,$amount,$created_by, $category_id, $payment_method, $description, $is_active =true, $expenses, $categories,$expense;
    public function render()
    {
        $this->expenses = Expense::latest()->get();
        return view('livewire.admin.expenses.expense-list');
    }
    public function mount()
    {
        $this->categories = ExpenseCategory::all();
    }
    public function resetInputFields()
    {
        $this->date = '';
        $this->category_id = '';
        $this->amount = '';
        $this->payment_method = '';
        $this->description = '';
    }
    public function save()
    {
        $this->validate([
            'amount' => 'required',
            'category_id' => 'required',
            'payment_method' => 'required',
        ]);
        $expense = new Expense();
        $expense->date = $this->date;
        $expense->amount = $this->amount;
        $expense->created_by = Auth::user()->name;
        $expense->category_id = $this->category_id;
        $expense->payment_method = $this->payment_method;
        $expense->description = $this->description;
        $expense->is_active = $this->is_active;
        $expense->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Expense has been created successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function editExpense($id)
    {
        $expense = Expense::where('id',$id)->first();
        $this->date = $expense->date;
        $this->amount = $expense->amount;
        $this->category_id = $expense->category_id;
        $this->payment_method = $expense->payment_method;
        $this->description = $expense->description;
        $this->is_active = $expense->is_active;
        $this->expense = $expense;
    }
    public function update()
    {
        $this->validate([
            'amount' =>'required',
            'category_id' =>'required',
            'payment_method' =>'required',
        ]);
        $expense = Expense::where('id', $this->expense->id)->first();
        $expense->date = $this->date;
        $expense->amount = $this->amount;
        $expense->category_id = $this->category_id;
        $expense->payment_method = $this->payment_method;
        $expense->description = $this->description;
        $expense->is_active = $this->is_active;
        $expense->save();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Expense has been updated successfully'
        ]);
        $this->dispatch('closemodal');
    }
    public function deleteExpense($id)
    {
        $expense = Expense::where('id',$id);
        $expense->delete();
        $this->dispatch('notify',[
            'type'=>'success',
            'title'=>'Success',
            'message'=>'Expense has been deleted successfully'
        ]);
    }
}
