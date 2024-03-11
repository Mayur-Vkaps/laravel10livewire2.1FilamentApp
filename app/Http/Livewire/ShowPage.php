<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{

    public $pageId = null;

    public function mount($id){
        $this->pageId =$id;

    }

    public function render()
    {  $page = Page::where('id',$this->pageId)->first();
        if($page == null){
            abort(404);
        }
        $data['page'] =$page;
        return view('livewire.show-page',$data);
    }
}
