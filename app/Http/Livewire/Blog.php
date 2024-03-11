<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;


class Blog extends Component
{






    public function render()
    {


        $articles =Article::orderBy('id','DESC')->paginate(1);
          $latestarticles =Article::orderBy('id','DESC')->whereDate('created_at', Carbon::today())->get();
           $categories =Category::orderBy('id','DESC')->get();


        $data['latestarticles'] =$latestarticles;
        $data['articles'] =$articles;
        $data['categories'] =$categories;
        return view('livewire.blog',$data);
    }
}
