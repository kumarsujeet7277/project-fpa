<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Option;
use Livewire\WithPagination;
use App\Http\Livewire\Request;  


class QuizQuestion extends Component
{
    public $questions = [];
    public $options;

    public $question_id;
    public $option;
    public $is_right;
 
    
    public function mount()
    {
        $this->questions = Question::with('options')->get();
    }



    public function render()
    {

        return view('livewire.quiz-question');
    }

 



    public function submit()
    {
      
        // $this->options = Option::find(array_values($this->questions->input('questions')));

    //     $result = $options->sum('is_right');
     

    //     $this->questions = $this->options->mapWithKeys(function ($option) {
    //         return [$option->question_id => [
    //                     'option_id' => $option->id,
    //                     'points' => $option->is_right,
    //                 ]
    //             ];
    //         })->toArray();
     }
}
