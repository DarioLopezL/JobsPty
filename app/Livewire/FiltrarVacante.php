<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class FiltrarVacante extends Component
{
    public $termino;
    public $categoria;
    public $salario;

    public function leerDatos()
    {
        $this->dispatch('terminoBusqueda', $this->termino, $this->categoria, $this->salario);
    }
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.filtrar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
