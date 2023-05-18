<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;
use Carbon\Carbon;

class PostComment extends Component
{
    public $title;
    public $description;
    public $post;

    public $comments = [];

    public $comment;
    public $created_date;

    public $reply;
    public $parent_id;



    public $addreply = false;
    public $view = false;

    public $replyCmt;

    public $viewId;
  



    public function addreplycmt($id)
    {

      // $condition = $id;
      // return view('livewire.post-comment', compact('condition'));

      // dd($id);
       $this->replyCmt = Comment::find($id);
       $this->replyCmt = $this->replyCmt->id;
      //  dd($replyCmt);
      // if($this->replyCmt === $id  && $this->addreply == false)
      // {
      //   $this->addreply = true;
      // }
      // else
      // {
      //   $this->addreply = false;
      // }
      
        
    }

    public function view($id)
    {
      $this->viewId = $id;
      if($this->view == false ) 
      {
        $this->view = true;
      }else{
        $this->view = false;
      }
      
    }
   


    public function mount()
    {
        $this->post = Post::find(5);
        // $this->comments = Post::with('comments')->latest()->get();

        // dd($this->comments);
        $this->comments = $this->post->comments;
    }

    public function render()
    {
      $comments = Comment::with('user')->latest()->take(5)->get();

        return view('livewire.post-comment');
    }


    public function comment($id)
    {
      $cmt = Comment::find($id);
      if(!$cmt)
      {
        addComment();
      }else{
        reply($id);
      }
    }


    public function addComment()
    {
      $this->validate([
        'comment' => 'required'
      ]);
      $newComment = Comment::create([
        'user_id' => 2,
        'post_id' => 5,
        'comment' => $this->comment,
      ]);
      session()->flash('message', 'Message has been send');
      // $this->comments->push($newComment);
       $this->comments->prepend($newComment);
      $this->comment = '';
    }

 



    public function reply($id)
    {
      $this->validate([
        'comment' => 'required'
      ]);
      
      $newComment = Comment::create([
        'user_id' => 1,
        'post_id' => 5,
        'parent_id' => $id,
        'comment' => $this->comment,
      ]);
      $this->comments->prepend($newComment);
      $this->reply = '';
    }
    
}
