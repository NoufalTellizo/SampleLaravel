<?php

namespace App\Livewire\Admin\Inventory\Item;

use App\Models\Category;
use App\Models\ProductTwo;
use Livewire\Component;

class ProductList extends Component
{
    public $name, $price, $description, $is_active = 1, $category_id, $categories, $products, $edit_product;
    public function render()
    {
        $this->products = ProductTwo::latest()->get();
        $this->categories = Category::latest()->get();
        return view('livewire.admin.inventory.item.product-list');
    }
    public function resetFields()
    {
        $this->name = '';
        $this->price = '';
        $this->description = '';
        $this->is_active = 1;
        $this->category_id = '';
    }
    public function save()
    {
        if ($this->edit_product) {
            $product = $this->edit_product;
        } else {
            $product = new ProductTwo();
        }
        $product->name = $this->name;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->is_active = $this->is_active;
        $product->category_id = $this->category_id;
        $product->save();
        $this->dispatch('closemodal');
    }
    public function edit($id)
    {
        $this->edit_product = ProductTwo::where('id', $id)->first();
        $this->name = $this->edit_product->name;
        $this->price = $this->edit_product->price;
        $this->category_id = $this->edit_product->category_id;
        $this->description = $this->edit_product->description;
        $this->is_active = $this->edit_product->is_active;
    }
    public function delete($id)
    {
        ProductTwo::whereId($id)->delete();
    }
}
