<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homesliders extends Component
{

    public $homesliders, $videourl, $playlists, $songid;

    public function assignvalues($vurl, $sid){
        $this->videourl = $vurl;
        $this->songid = $sid;
    }
    
    public function render()
    {
        return view('livewire.homesliders');
    }
}
