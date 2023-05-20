<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use Livewire\WithPagination;

class Pagination extends Component
{
    // public $countries;
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $amount = 5;

  
    
    public function render()
    {
        $countries = Country::take($this->amount)->get();

        return view('livewire.pagination', compact('countries'));
    }

    public function load()
    {
        $this->amount += 10;
    }

}
