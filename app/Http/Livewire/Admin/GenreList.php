<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Genre;

use Livewire\WithPagination;

class GenreList extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search, $genre;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $genres = Genre::where('name', 'LIKE', '%' . $this->search . '%')
            ->where('type', $this->genre)
            ->orderBy('name')
            ->paginate();

        return view('livewire.admin.genre-list', compact('genres'));
    }
}
