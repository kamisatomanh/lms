<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\GeminiService;

class ChatBox extends Component
{
    public $message = '';
    public $messages = [];
    public $open = false;

    public function toggle()
    {
        $this->open = !$this->open;
    }

    public function send(GeminiService $gemini)
    {
        if (trim($this->message) === '') return;

        // user message
        $this->messages[] = [
            'from' => 'user',
            'text' => $this->message
        ];

        // AI reply
        $reply = $gemini->chat($this->message);

        $this->messages[] = [
            'from' => 'ai',
            'text' => $reply
        ];

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-box');
    }
}
