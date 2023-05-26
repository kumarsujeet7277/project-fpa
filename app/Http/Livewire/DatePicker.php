<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class DatePicker extends Component
{


    public $project_name;
    public $due_date;



    protected $rules = [
        'project_name' => 'required|min:6',
        'due_date' => 'required|date',
    ];

    public function render()
    {
        return view('livewire.date-picker');
    }

    public function saveProject()
    {
        // dd($this->due_date);
        $this->validate();
        $project = new Project();
        $project->project_name = $this->project_name;
        $project->due_date = $this->due_date;
        $project->save();
        $this->dispatchBrowserEvent('comfirmMsg');
        $this->project_name = '';
        $this->due_date = '';

    }
}
