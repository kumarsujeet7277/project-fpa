<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class AddProduct extends Component
{

    public $product_name;
    public $product_description;

    protected $rules = [
        'product_name' => 'required|min:3',
        'product_description' => 'required|min:50',
    ];

    public function render()
    {
        return view('livewire.add-product');
    }

    // public function updated($product_name, $product_description)
    // {
    //     $this->validateOnly($product_name);
    //     $this->validateOnly($product_description);
    // }


    
    public function updated($validatedData)
    {
        $this->validateOnly($validatedData);
      

    }


    public function addProduct()
    {
        $validatedData = $this->validate([
            'product_name' => 'required|min:3',
            'product_description' => 'required|min:50',
        ]);

        // Product::create($validatedData);
        // session()->flash('message', 'product has been added successfully!');

        $product = new Product();
        $product->product_name = $this->product_name;
        $product->product_description = $this->product_description;
        $product->save();
        session()->flash('message', 'Product has been added successfully!');
    }
}
