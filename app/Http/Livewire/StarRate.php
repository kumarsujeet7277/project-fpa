<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Rating;

class StarRate extends Component
{

    public $post;
    public $rate = 5;
    public $avgRating;
    public $sum = 0;
    public $count = 0;



    public function mount()
    {
        $this->post = Post::find(5);
        //  dd($post);


       
        $post = Post::withCount('ratings')->latest('id')->first();
        foreach ($post->ratings as $rating) {
            $this->sum = $rating->rating; 
            $this->sum ++;
            $this->count = $rating->count();
            
        }
        $this->avgRating = $this->sum/$this->count;
        $this->avgRating = $this->avgRating/5;
        // dd($this->avgRating);
    }
    public function render()
    {
       
        return view('livewire.star-rate', ['sum' => $this->sum]);
    }

    public function rating($rate)
    {
        $rating = Rating::where('user_id', 2)->where('post_id', $this->post->id)->first();
    
        if (!empty($rating)) {
            Rating::where('user_id', 2)->where('post_id', $this->post->id)->update([
                'user_id' => 2,
                'post_id' => 5,
                'rating' => $rate,
            ]);
         
             
            session()->flash('message', 'Success!');
        } else {
            Rating::create([
                'user_id' => 2,
                'post_id' => 5,
                'rating' => $rate,
            ]);
            session()->flash('message', 'Thankyou for your review!');
          
        }





       

    }
}
