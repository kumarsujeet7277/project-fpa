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

    public function mount()
    {
        // $this->countries = Country::paginate(10);
        
    }
    
    public function render()
    {
        return view('livewire.pagination', [
            'countries' => Country::paginate(5),
        ]);
    }

}
