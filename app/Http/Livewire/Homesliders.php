<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homesliders extends Component
{

    public $homesliders, $playlists, $plistid, $songid;

    public function assignvalues($plid, $sid){
        $this->plistid = $plid;
        $this->songid = $sid;
    }
    
    public function render()
    {
        return view('livewire.homesliders');
    }
}
