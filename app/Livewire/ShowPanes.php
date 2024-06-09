<?php

namespace App\Livewire;

use App\Models\Pan;
use Livewire\Component;
use Livewire\WithPagination;
class ShowPanes extends Component
{
    use WithPagination;
    public function render()
    {
        $panes = Pan::paginate(8);


        return view('livewire.show-panes',compact('panes'));
    }
}
