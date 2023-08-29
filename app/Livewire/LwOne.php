<?php

namespace App\Livewire;

use Livewire\Component;

class LwOne extends Component
{
    public $lwInputOne = '';

    public function render()
    {
        return view('livewire.lw-one');
    }
}
