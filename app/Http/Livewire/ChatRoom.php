<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class ChatRoom extends Component
{

    public $message;

    public function render()
    {
        $allMessage = Message::with('user')->latest()->take(10)->get()->sortBy('id');

        return view('livewire.chat-room', compact('allMessage'));
    }


    public function sendMsg()
    {
        Message::create([
            'user_id' => 1,
            'message' => $this->message,
        ]);
        session()->flash('message', 'message send!');
        $this->reset('message');
    }
}
