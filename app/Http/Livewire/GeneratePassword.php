<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GeneratePassword extends Component
{

    public $password;
    public $password_confirmation;
    public $visible;

    public function mount()
    {
        $this->visible = false;
    }

    public function render()
    {
        return view('livewire.generate-password');
    }

    public function generatePassword()
    {
        // dd('dsjkhds');
        $lowercase = range('a', 'z');
        $Uppercase = range('A', 'Z');
        $digit = range(0, 9);
        $specialChar = ['!', '@', '#', '$', '%', '^', '&', '*'];
        $chars = array_merge($lowercase, $Uppercase, $digit, $specialChar);
        $lenght = 10;

        do{
            $password = array();

            for($i=0; $i<=$lenght; $i++)
            {
                $int = rand(0, count($chars) - 1);
                $password[] = $chars[$int];
            }

        } while (empty(array_intersect($specialChar, $password)));
 
        $this->setPasswords(implode('', $password));
    }

    private function setPasswords($value): voi
    {
        $this->password = $value;
        $this->password_confirmation = $value;
    } 
}
