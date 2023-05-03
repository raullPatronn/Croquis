<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class BuscadorUsers extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.buscador-users', [
            'users' => User::where('name','like','%' .$this->search. '%')->get(),
        ]);
    }
}
