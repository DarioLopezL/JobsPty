<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class MostrarVacantes extends Component
{
    use WithPagination;
    /* protected $paginationTheme = 'tailwind'; */

    public function updatingSearch()
    {
        $this->resetPage();
    }

    #[On('eliminarVacante')]
    public function eliminarVacante( Vacante $vacante)
    {
        $vacante->delete();
        $this->authorize('delete', $vacante);
    }

    public function render()
    {

        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(2);
        return view('livewire.mostrar-vacantes', ['vacantes' => $vacantes]);
    }
}
