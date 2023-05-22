<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Models\Prodect;

class MultiSelect extends Component
{

    public $product_name;
    public $tags = [];
    public $categories;

    protected $rules = [
        'product_name' => 'required|min:3',
        'tags' => 'required',
    ];


    public function render()
    {
        return view('livewire.multi-select');
    }

    public function mount()
    {
        $this->categories = Category::all();
      
    }

    public function updated($validatedData)
    {
        $this->validateOnly($validatedData);
    }


    public function submit()
    {

        // dd($this->tags);    
        // $validatedData = $this->validate([
        //     'product_name' => 'required|min:3',
        //     'tag' => 'required',
        // ]);

        $input = [
            'product_name' => $this->product_name,
            'tags' => json_encode($this->tags),
        ];
        $store = Prodect::create($input);
        $this->product_name = '';
        $this->tags = '';
        $this->emit('productStore');
        session()->flash('message', 'Product successfully created!');


    }
}
