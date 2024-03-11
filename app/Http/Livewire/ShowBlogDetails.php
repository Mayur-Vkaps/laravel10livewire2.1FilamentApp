<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowBlogDetails extends Component
{
    public $article;

    public function mount($id){
        $this->article = \App\Models\Article::with('category')->findOrFail($id);

    }
    public function render()
    {
        return view('livewire.show-blog-details');
    }
}
