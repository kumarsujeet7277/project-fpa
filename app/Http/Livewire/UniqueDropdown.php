<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Tournament;
use App\Models\CountryTournament;


class UniqueDropdown extends Component
{


    public $name = '';
    public $countries;

    public $maxPosition = 3;
    public array $positions = [];


    public function mount()
    {
        $this->countries = Country::orderBy('name')->get();
    }



    public function render()
    {
        // $tournaments = Tournament::all(); 
        // dd( $tournaments);
        $tournaments = Tournament::with(['countries' => function($query){
                $query->orderBy('position');
        }])->latest()->get(); 
        // $countries = CountryTournament::orderBy('position')->latest()->get();
        // dd($countries);
        return view('livewire.unique-dropdown', compact('tournaments'));
    }


    public function savePosition()
    {
        // dd('done');
        $this->validate([
            'name' => 'required',
            'positions' => [
                'required',
                'array',
                'min:'. $this->maxPosition,
            ],
        ]);

        $tournament = Tournament::create([
            'name' => $this->name,
        ]);

        foreach ($this->positions as $position => $country)
        {
  
            $tournament->countries()->attach($country, ['position' => $position]);
            // CountryTournament::create([
            //     'country_id' => $country,
            //     'tournament_id' => $tournament->id,
            //     'position' => $position,
            // ]);
           
        }
        session()->flash('message', 'Tournament has been created successfully!');
        $this->reset(['name', 'positions']);
    }
}
