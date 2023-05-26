<?php

namespace App\Http\Livewire;

use Livewire\Component;
use ZxcvbnPhp\Zxcvbn; 

class PasswordStrength extends Component
{

    public $password = '';
    public $strengthScore = 0; 
    public array $strengthLevels = [ 
        1 => 'Weak',
        2 => 'Fair',
        3 => 'Good',
        4 => 'Strong',
    ]; 

    public function render()
    {
        return view('livewire.password-strength');
    }

   
 
    public function updatedPassword($value)
    {
        $this->strengthScore = (new Zxcvbn())->passwordStrength($value)['score'];
    } 

}
