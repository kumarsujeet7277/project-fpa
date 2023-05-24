<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\MOdels\Drag;   
use Livewire\WithPagination; 

class DragDrop extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $email;

    public function render()
    {
        $details = Drag::orderBy('position')->paginate(6);
        return view('livewire.drag-drop', compact('details'));
    }

    public function updateOrder($items)
    {
        foreach($items as $item)
        {
            Drag::find($item['value'])->update(['position' => $item['order']]);
        }
    }
}
