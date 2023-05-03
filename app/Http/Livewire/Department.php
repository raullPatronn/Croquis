<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Department extends Component
{
    public function render()
    {
        return view('livewire.department', [
            'Departments' => Department::where('nombre','like','%' .$this->search. '%')->get(),
        ]);
    }
}
