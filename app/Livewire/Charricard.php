<?php

namespace App\Livewire;

use App\Models\Tarjeta;
use Livewire\Component;

class Charricard extends Component
{
    public function render()
    {

        $tarjetas = Tarjeta::all();
        return view('livewire.charricard', compact('tarjetas'));
    }
}
