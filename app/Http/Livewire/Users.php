<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    public $mensaje='este mensaje se utiliza en otro componente';
    //public $users,$detalleUser;
    public $detalleUser,$nombre;
    public $editar=false;

    public function mount () {
        //$this->users=User::all();
        $this->mensaje = 'este es el mount';
    }

    public function render()
    {
        return view('livewire.users',['users'=> User::paginate(10),]);
        
    }

    public function show($id)
    {
        $this->resetear();
        $this->mensaje='pulsaste detalles de usuario';
        $this->detalleUser=User::find($id);
        $this->nombre=$this->detalleUser->name;
    }
    public function update($id)
    {
        $this->editar=true;
        $this->mensaje='pulsaste editaaar';
    }

    public function resetear()
    {
        $this->editar=false;
    }

    public function cambiar($id){
        $this->detalleUser->name=$this->nombre;
        $this->detalleUser->save();
    }
}
