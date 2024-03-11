<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
         $services =Service::orderBy('id','DESC')->get();
         $data['services'] =$services;
        return view('livewire.show-home',$data);
    }
}
