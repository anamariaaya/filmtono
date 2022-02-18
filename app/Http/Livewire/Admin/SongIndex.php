<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Song;

use Livewire\WithPagination;

class SongIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $songs = Song::where('title', 'LIKE', '%' . $this->search . '%')
                ->orwhere('video_url', 'LIKE', '%' . $this->search . '%')
                ->orderby('title')
                ->paginate();

        return view('livewire.admin.song-index', compact('songs'));
    }
}
