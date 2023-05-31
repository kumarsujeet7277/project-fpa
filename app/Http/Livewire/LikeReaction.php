<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Like;
use App\Models\User;



class LikeReaction extends Component
{

    public $post;
    public $like = false;
    public $unlike = false;
    public $bookmark = false;
    public $bookmarked = false;
    public $likeCount = 0;
    public $bookmarkCount = 0;

    public $user_id;
    public $post_id;

    public $btn = false;
    public $btn2 = false;


    protected $listeners = [
        'likePost',
        'bookmarkedPost',
        'btn',
        'btn2'
    ];

    public function bookmarkedPost()
    {
        if($this->bookmark == false)
        {
            $this->bookmark = true;
            $this->bookmarkCount ++;    
        }else{
            $this->bookmark = false;
            $this->bookmarkCount --;
        }
        

    }

    public function likePost()
    {
        if($this->like == false)
        {
            $this->like = true;
            $this->likeCount ++;
        }else{
            $this->like = false;
            $this->likeCount --;
        }

        $data = Like::where('user_id', 2)->where('post_id', $this->post->id)->first();
        // dd($data);
        if(!$data)
        {

            // dd($data);
            // $this->validate([
            //     'user_id' => 'required',
            //     'post_id' => 'required',
            // ]);
            
            Like::create([
                'user_id' => 2,
                'post_id' => $this->post->id,
                'like' => $this->like
            ]);
        }else{
            // dd('fdskljjfds');
            Like::where('user_id', 2)
            ->where('post_id', $this->post->id)
            ->update([
                'like' => $this->like
            ]);
        }
    }

    public function mount()
    {
        $this->post = Post::first();
        $this->like = Like::where('user_id', 2)->where('post_id', $this->post->id)->first();
        if(isset($this->like)){
            if($this->like->like == true )
            {
                $this->like = $this->like->like;
            }else{
                $this->like = $this->like->like;
            }
        }
     
        $this->likeCount = Like::sum('like');
        // dd($this->post);
    }
    public function render()
    {
        return view('livewire.like-reaction');
    }

    public function btn()
    {
        if($this->btn == false)
        {
            $this->btn = true;
        }else{
            $this->btn = false;
        }
    }


    public function btn2()
    {
        if($this->btn2 == false)
        {
            $this->btn2 = true;
        }else{
            $this->btn2 = false;
        }
    }
}
