<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blogID = null;
    public function mount($id){
        $this->blogID = $id;
    }

    public function render()
    {
        $article = Article::select('articles.*','categories.name as categorys_name')->leftJoin('categories','categories.id','articles.category_id')->where('status',1)->findOrFail($this->blogID);
        return view('livewire.blog-detail', ['article' => $article]);
    }
}
