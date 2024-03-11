<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =[
        'title','author','content','image','category_id','status','content','created_at'
    ];

    public function category(){
      return $this->belongsTo(Category::class);
    }
}
