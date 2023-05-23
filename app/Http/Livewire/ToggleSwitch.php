<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ToggleSwitch extends Component
{

    public $users;
    // public Model $model;
    // public $field;
    public $active;



    // public $active = false;
    // public $value;

    public function mount()
    {
        // $this->$active = (bool) $this->model->getAttribute($this->field);
        $this->users = User::all();
    }

    // public function mount()
    // {
    //     $this->active = (bool) $this->model->getAttribute($this->field);
    //     $this->users = User::all();
    //     // dd($users);
    // }


    public function render()
    {
        return view('livewire.toggle-switch');
    }



    
    public function activeUser($id)
    {
        // dd($id);
        $this->active = User::find($id);
        $this->value = $this->active->active;
// dd($this->value);
        $value = ($this->value === 0) ? 1 : 0;
        // dd($value);
            User::where('id', $id)->update([
                'active' => $value,
            ]);



    }

    // public function updating($field, $value)
    // {
    //     // dd($value, $this->field);
    //     // $this->model->setAttribute($this->field, $value)->save();
        
    // }







}
