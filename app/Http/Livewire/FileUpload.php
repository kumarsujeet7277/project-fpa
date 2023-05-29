<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Upload;

class FileUpload extends Component
{

    use WithFileUploads;

    public $title;
    public $image ;

    public $posts;

    public function mount()
    {
        $this->posts = Upload::all();
        // dd($posts);
    }

    public function render()
    {
        
        return view('livewire.file-upload');
    }

    public function postSubmited()
    {
        // dd($this->image);
        $validateData = $this->validate([
                'title' => 'required|min:5|max:50',
                'image' => 'required|mimes:jpeg,jpg,png|image',
            ]);
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('public/images', $imageName);
        
        $upload = new Upload();
        $upload->title = $this->title;
        $upload->image = $imageName;
        $upload->save();
        $this->dispatchBrowserEvent('msg');
    }
}
