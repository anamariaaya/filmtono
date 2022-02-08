<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Homeslider;

use Livewire\WithPagination;

class HomesliderIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $homesliders = Homeslider::where('title', 'LIKE', '%' . $this->search . '%')
                        ->orwhere('subtitle', 'LIKE', '%' . $this->search . '%')
                        ->orderby('title')
                        ->paginate();

        return view('livewire.admin.homeslider-index', compact('homesliders'));
    }
}
