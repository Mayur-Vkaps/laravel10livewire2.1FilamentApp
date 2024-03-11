<?php

use App\Http\Livewire\Faq;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Team;
use App\Http\Livewire\ShowHome;
use App\Http\Livewire\ShowPage;
use App\Http\Livewire\ShowService;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowBlogDetails;
use App\Http\Livewire\ShowContactPage;
use App\Http\Livewire\ShowServicePage;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowServicePage::class)->name('servicepage');
Route::get('/team',Team::class)->name('team');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/faq',Faq::class)->name('faq');
Route::get('/contact',ShowContactPage::class)->name('showContact');
Route::get('/service/{id}',ShowService::class)->name('showservice');
Route::get('/blog/{id}',ShowBlogDetails::class)->name('showBlog');
Route::get('/page/{id}',ShowPage::class)->name('showpage');
