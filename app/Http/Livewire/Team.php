<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class Team extends Component
{


    public function render()
    {
        $teams =Member::orderBy('id','DESC')->get();
        $data['teams'] =$teams;
        return view('livewire.team',$data);
    }
}
