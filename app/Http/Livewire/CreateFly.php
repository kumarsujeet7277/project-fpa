<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Productnw;

class CreateFly extends Component
{

 

    public $product_name;
    public $categories; 
    public $category_id;

    protected $listeners = ['updateCategory' => 'mount'];

    public function mount()
    {
        $this->categories = Category::all();
    }


    public function render()
    {
        return view('livewire.create-fly');
    }

   

    public function addProduct()
    {
    
        $this->validate([
            'product_name' => 'required|min:3',
            'category_id' => 'required',
        ]);

        $product = new Productnw();
        $product->product_name = $this->product_name;
        $product->category_id = $this->category_id;
        $product->save();
        $this->dispatchBrowserEvent('create-message');
        $this->product_name = '';
        $this->category_id = '';
    }


}
