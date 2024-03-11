<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowService extends Component
{

    public $service;

    public function mount($id){
        $this->service = \App\Models\Service::findOrFail($id);
        
    }
    public function render()
    {
        return view('livewire.show-service');
    }
}
