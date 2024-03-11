<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Faq as Faqs;

class Faq extends Component
{
    public function render()
    {
        $faqs =Faqs::orderBy('id','DESC')->get();
        $data['faqs'] =$faqs;
        return view('livewire.faq',$data);
    }
}
