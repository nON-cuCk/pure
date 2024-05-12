<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\FireList;

class Rokoko extends Component
{
    public $fire_list;
    public $firename;

    public function mount()
    {
        $this->fire_list = FireList::all();
    }



    public function render()
    {
        return view('livewire.rokoko');
    }
}
