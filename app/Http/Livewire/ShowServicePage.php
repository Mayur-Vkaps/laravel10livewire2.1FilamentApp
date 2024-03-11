<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServicePage extends Component
{
    public function render()
    {      $services =Service::orderBy('id','DESC')->get();
        $data['services'] =$services;
        return view('livewire.show-service-page',$data);
    }
}
