<?php

namespace App\Livewire\Admin\Inventory\Item;

use App\Models\Category;
use App\Models\ProductTwo;
use Livewire\Component;

class CategoryList extends Component
{
    public $name, $is_active = 1, $categories, $edit_category, $products, $selectedCategoryId;
    public $selected_products = [];
    public function render()
    {
        $this->products = ProductTwo::latest()->get();
        $this->categories = Category::latest()->get();
        return view('livewire.admin.inventory.item.category-list');
    }
    public function resetFields()
    {
        $this->name = '';
        $this->is_active = 1;
        $this->selected_products = [];
    }
    public function save()
    {
        if ($this->edit_category) {
            $category = $this->edit_category;
        } else {
            $category = new Category();
        }
        $category->name = $this->name;
        $category->is_active = $this->is_active;
        $category->save();
        $this->resetFields();
        $this->dispatch('closemodal');
    }
    public function edit($id)
    {
        $this->edit_category = Category::whereId($id)->first();
        $this->name = $this->edit_category->name;
        $this->is_active = $this->edit_category->is_active;
    }
    public function delete($id)
    {
        Category::where('id', $id)->delete();
    }

    public function assignSelectedProducts()
    {
        foreach ($this->selected_products as $item) {
            $product = ProductTwo::where('id', $item)->first();
            $product->category_id =  $this->selectedCategoryId;
            $product->save();
        }
        $this->dispatch('closemodal');
        $this->resetFields();
    }
    public function selectCategory($id)
    {
        $this->selectedCategoryId = $id;
    }
}
