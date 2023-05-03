<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Edificio;
use App\Models\Departamento;

class Servicios extends Component
{
    public $busqueda;
    public $resultados;
    public $detalleUser, $nombre, $detalleDep, $nom;
    public $servicio;
    public $mostrarModal = false;

    public function show($id)
    {
        $this->detalleUser=Edificio::find($id);
        $this->nombre=$this->detalleUser->name;
        $this->detalleDep=Departamento::find($id);
        $this->nombre=$this->detalleDep->name;
    }

    public function servi($id)
    {
        $this->mostrarModal = true;
        $this->servicio=Departamento::find($id);
        $this->nom=$this->servicio->name;
        
    }

    public function cerrarModal()
    {
        $this->mostrarModal = false;
    }

    public function buscar()
    {
        $this->resultados = Edificio::where('comun', $this->busqueda)
                                     ->orWhere('nombre', 'like', '%' . $this->busqueda . '%')
                                     ->orWhereHas('departamentos', function ($query) {
                                         $query->where('nombre', $this->busqueda) ->orWhere('comun', 'like', '%' . $this->busqueda . '%');
                                     })
                                     ->get();
    }

    public function render()
    {
        return view('livewire.servicios');
    }
}
