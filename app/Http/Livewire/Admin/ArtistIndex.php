<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\User;

use Livewire\WithPagination;

class ArtistIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $artists = User::where('name', 'LIKE', '%' . $this->search . '%')
                    ->orwhere('email', 'LIKE', '%' . $this->search . '%')
                    ->role('Artist')
                    ->orderBy('name')
                    ->paginate();

        return view('livewire.admin.artist-index', compact('artists'));
    }
}
