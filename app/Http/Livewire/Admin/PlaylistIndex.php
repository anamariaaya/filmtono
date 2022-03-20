<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Playlist;

use Livewire\WithPagination;

class PlaylistIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $playlists = Playlist::where('name', 'LIKE', '%' . $this->search . '%')
                    ->orderBy('name')
                    ->paginate();

        return view('livewire.admin.playlist-index', compact('playlists'));
    }
}
