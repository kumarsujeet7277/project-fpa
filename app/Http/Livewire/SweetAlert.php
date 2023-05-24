<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class SweetAlert extends Component
{

    protected $listeners = ['deleteConfirmed' => 'deletePost'];

    public $post;
    public $postDelete;

    public $title;
    public $description;

    // public function updatedDescription()
    // {
    //     dd($this->description);
    // }

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required|min:50',
    ];

  

    public function render()
    {
        $posts = Post::latest()->take(5)->get();
        return view('livewire.sweet-alert', compact('posts')); 
    }

    // public function delete($id)
    // {
    //     $post = Post::find($id);
    //     // dd($post);
    //     $post->delete();
    //     session()->flash('message', 'Post has been deleted successfully!');
    // }

    public function confrimDelete($id)
    {
        $this->postDelete = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deletePost()
    {
        $post = Post::findOrFail($this->postDelete);
        $post->delete();

        $this->dispatchBrowserEvent('deleted');
    }





    public function updated($validatedData)
    {
        $this->validateOnly($validatedData);
    }

    public function postCreated()
    {
        // dd($this->description);
        $validatedData = $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:50',
        ]);

        $post = new Post();
        $post->user_id = 1;
        $post->title = $this->title;
        $post->description = $this->description;
        $post->save();

        $this->dispatchBrowserEvent('create-message');
        $this->title = '';
        $this->description = '';
        //session()->flash('message', 'Post has been created');

    }
}
