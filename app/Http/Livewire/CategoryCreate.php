<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryCreate extends Component
{

    public $showModal = false;
    protected $listeners = ['openModel'];

    public $name;
    public $slug;



    public function render()
    {
        return view('livewire.category-create');
    }


    public function openModel()
    {
        // dd($this->showModal);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3|unique:categories',
            'slug' => 'required|same:name'
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        $this->dispatchBrowserEvent('category-create-msg');
        $this->name = '';
        $this->slug = '';

        $this->emit('updateCategory');
        $this->closeModal();
    }


}
