<?php

namespace App\Livewire\News;

use Livewire\Component;

class Latest extends Component
{

    public $id;

    public function render()
    {
        return view('livewire.news.latest', [
            'id' => $this->id,

        ])->layout('layouts.guest');
    }
}
