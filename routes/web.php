<?php

use App\Livewire\ShowBlog;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowProject;
use App\Livewire\ShowService;
use App\Livewire\ShowPage;
use App\Livewire\BlogDetail;
use App\Livewire\ProjectDetail;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaq;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', ShowHome::class )-> name('home');
Route::get('/services', ShowServicePage::class )-> name('servicesPage');
Route::get('/service/{id}', ShowService::class )-> name('servicePage');
Route::get('/team', ShowTeamPage::class)-> name('teamPage');
Route::get('/blog', ShowBlog::class)-> name('blog');
Route::get('/blog/{id}', BlogDetail::class)-> name('blogDetail');
Route::get('/project', ShowProject::class)-> name('project');
Route::get('/project/{id}', ProjectDetail::class)-> name('projectDetail');
Route::get('/about/{id}', ShowPage::class)-> name('page');
Route::get('/contact', ShowContactPage::class)-> name('contact');
Route::get('/faq', ShowFaq::class)-> name('faq');

