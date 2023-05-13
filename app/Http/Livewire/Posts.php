<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Vote;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Posts extends Component
{
    // public $vote = 0;
    public $post_id;
    public  $vote = 0;
    public $voted = false;
    // public $data;
    // public $increment ;
    // public $decrement ;
    // public $user;
 
    // public $likeCount = 0;


    public function mount($post_id, $vote)
    {
    //     // $this->user = Auth::User();
    //     $this->data = Vote::where('user_id', 2)
    //         ->where('post_id', $this->post_id)
    //         ->first();

    // //    dd($this->data);
    
    //     if (isset($this->data->vote)) {
    //         if ($this->vote) {
    //             $this->increment;
    //         } else {
    //             $this->decrement;
    //         }
   
    //     }

        $this->post_id = $post_id;
        $this->vote = $vote;
    
    }

    public function render()
    {


        // return view('livewire.posts',[
        //     'posts' => Post::with('votes')->get()
        // ]);

        return view('livewire.posts',[
                'posts' => Post::with('votes')->get()
            ]);
      
    }

    public function vote($val, $id)
    {
        $post = Post::find($id);
        $v = Vote::where('post_id', $post->id)->get();
       
        if($v->count() > 0)
        {
            $this->voted = true;
          
        }
    
        $data =  Vote::where('user_id', 2)
                ->where('post_id', $post->id)
                ->first();

                // dd($v);  
        if(!$data){
            $like = Vote::create([
                'user_id' => 2,
                'post_id' => $post->id,
                'vote' => $val,
                // dd($val)
            ]);

        }else{
            // dd('fkhjfdks');
            $unlike = Vote::where('user_id', 2)
                ->where('post_id', $post->id)
                ->update([
                    'vote' => $val,
                ]);

              
        }
        

        // $vote = Vote::find($post->id)->increment('vote', $val);
   
        $this->vote += $val ;
    }





    // public function vote($id)
    // {
    //     $action = $request->get('action');
    //     switch ($action) {
    //         case 'Like':
    //             Chirp::where('id', $id)->increment('likes_count');
    //             break;
    //         case 'Unlike':
    //             Chirp::where('id', $id)->decrement('likes_count');
    //             break;
    //         }
    // }

    // public function vote($vote)
    // {
      
    //    if(auth()->user()->votes()->where('post_id', $this->post_id)->count() > 0)
    //    {
    //     $this->voted = true;
    //     return;

    //      Vote::create([
    //         'user_id' => Auth::id(),
    //         'post_id' => $this->post_id,
    //         'post_id' => $vote,
    //      ]);
    //    }
    // }
    
    
    // public function increment($id)
    // {
    //     $post = Post::find($id);
       
    //     // $vote = $post->vote->vote ?? $this->vote;
    //     // $vote = $this->vote++;
       
    //     // dd($this->data);


    //     // dd($this->data);

    //     if (!$this->data){ 

    //         $createLike = Vote::create(
    //             [
    //                 'user_id' => 2,
    //                 'post_id' =>  $post->id,
    //                 'vote' => $this->vote++,
    //             ]
    //         );
          
          
    //     } else {
    //         $updateLike = Vote::where('user_id', 2)
    //             ->where('post_id', $post->id)
    //             ->update([
    //                 'vote' => $this->vote++,
    //             ]);
    //     }
    // }








    // public function decrement($id)
    // {
    //     $post = Post::find($id);

    //     //   dd($this->data);



    //     if (!$this->data){ 

    //         $createLike = Vote::create(
    //             [
    //                 'user_id' => 2,
    //                 'post_id' =>  $post->id,
    //                 'vote' => $this->vote--,
    //             ]
    //         );
    //     } else {
    //         $updateLike = Vote::where('user_id', 2)
    //             ->where('post_id', $post->id)
    //             ->update([
    //                 'vote' => $this->vote--,
    //             ]);
    //     }
    // }

   

}
