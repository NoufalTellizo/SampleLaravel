<?php

namespace App\Livewire\Admin\Inventory\Item;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;

class ItemManage extends Component
{
    public $brand_name, $products = [], $brand;
    public function render()
    {
        return view('livewire.admin.inventory.item.item-manage');
    }
    public function mount($id = null)
    {
        if ($id) {
            $this->brand = Brand::where('id', $id)->first();
            $this->brand_name = $this->brand->name;
        }
        $products = Product::where('brand_id', $id)->get();
        foreach ($products as $product) {
            $array = [
                'product_name' => $product['name'],
                'shortcode' => $product['shortcode'],
                'is_active' => $product['is_active'],
            ];
            array_push($this->products, $array);
        }
    }
    public function delete($key)
    {
        array_splice($this->products, $key, 1);
    }
    public function addField()
    {
        $array = [
            'shortcode' => '',
            'product_name' => '',
            'is_active' => 1
        ];
        array_push($this->products, $array);
    }
    public function save()
    {
        $brand = new Brand();
        $brand->name = $this->brand_name;
        $brand->save();

        foreach ($this->products as $item) {
            $product = new Product();
            $product->shortcode = $item['shortcode'];
            $product->name = $item['product_name'];
            $product->is_active = $item['is_active'];
            $product->brand_id = $brand->id;
            $product->save();
        }
        return redirect()->route('inventory.itemslist');
    }
    public function update($id)
    {
        $brand = Brand::where('id',$id)->first();
        $brand->name = $this->brand_name;
        $brand->save();

        Product::where('brand_id',$id)->delete();
        foreach ($this->products as $item) {
            $product = new Product();
            $product->shortcode = $item['shortcode'];
            $product->name = $item['product_name'];
            $product->is_active = $item['is_active'];
            $product->brand_id = $brand->id;
            $product->save();
        }
        return redirect()->route('inventory.itemslist');
    }
}
