<?php

namespace App\Livewire;

use App\Models\Workshop;
use Livewire\Component;

class WorkshopDetails extends Component
{
    public $workshopId;

    public function mount($workshopId)
    {
        $this->workshopId = $workshopId;
        // Carregar detalhes do workshop usando $workshopId
    }

    public function render()
    {
        return view('livewire.workshop-details', [
            'workshop' => Workshop::find($this->workshopId),
        ]);
    }
}
