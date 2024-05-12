<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FireList;

class Edit extends Component
{
    public $fire_list;
    public $type;
    public $firename;
    public $description;
    public $serial_number;
    public $status;

    public $check = true;

    public function mount()
    {
        $this->fire_list = FireList::all();
    }
    public function updateFire($id)
    {

        $fire_list = Firelist::find($id);
        $this->firename = $fire_list->firename;
        $this->check = false;
    }
    public function update($fireId)
    {
        // Find the selected fire list item
        $fire = FireList::findOrFail($fireId);

        // Validate the firename field
        $this->validate([
            'firename' => 'required|string|max:255',
        ]);

        // Update the firename field
        $fire->update(['firename' => $this->firename]);

        // Re-fetch fire lists after update
        $this->fire_list = FireList::all();

        // Reset the input fields
        $this->reset(['firename']);
    }
    public function render()
    {
        return view('livewire.edit');
    }
}
