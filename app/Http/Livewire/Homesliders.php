<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homesliders extends Component
{

    public $homesliders, $songs, $videourl;
    
    public function render()
    {
        return view('livewire.homesliders');
    }
}
