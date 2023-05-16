<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Passenger;
use App\Models\Country;
use App\Models\City;

class MultiStep extends Component
{
    public $from_country;
    public $from_city;
    public $to_country;
    public $to_city;
    public $adults ;
    public $children ;
    public $price;

    public $Step;
    public $passenger;

    public $countries;
    public $cities; 
    public $city;

  

  

    public $tatal_val ;

    
  

    protected $stepActions = [
        'submit1',
        'submit2',
        'submit3',
        
    ];

    public function mount()
    {
        $this->step = 0;

        $this->countries = Country::all();
        $this->cities = collect();

       
       
    }

    public function render()
    {


        $countries = $this->countries;
        $this->cities = City::where('country_id', $this->from_country)->get();
        $this->city = $this->cities->first()->id ?? null;
        
        $passenger = Passenger::all();

        return view('livewire.multi-step');


        
    }


  

    
   

    
        

    public function nextStep()
    {
        $action = $this->stepActions[$this->step];
        $this->$action();
    }

   
    public function submit1()
    {
      
        $this->validate([
            'from_country' => 'required',
            'from_city' => 'required',
        ]);

        $this->step++;
    }

    public function submit2()
    {
      
        $this->validate([
            'to_country' => 'required',
            'to_city' => 'required',
        ]);

        $this->step++;
    }

   

    public function submit3()
    {
 
        $adults = 250;
        $children = 100;


        $this->validate([
            'adults' => 'required',
            'children' => 'required',
        ]);

        
       Passenger::create([
        'from_country' => $this->from_country,
        'from_city' => $this->from_city,
        'to_country' => $this->to_country,
        'to_city' => $this->to_city,
        'adults' => $this->adults,
        'children' => $this->children,
        'price' => ($this->adults * $adults) + ($this->children * $children), 
    ]);
    

session()->flash('message', 'created successfully');
return view('livewire.multi-step');

        // $this->step++;
    }

 

  




  

}
