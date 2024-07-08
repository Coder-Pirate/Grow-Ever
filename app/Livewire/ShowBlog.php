<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;
use Monolog\Handler\ElasticaHandler;

class ShowBlog extends Component
{

    #[Url]
    public $categorySlug=null;

    public function render()
    {   

        $categorys = Category::all();

        if(!empty($this->categorySlug)){
            $category = Category::where('slug',$this->categorySlug)->first();

            if(empty($category)){
                abort(404);
            }

            $articles = Article::orderBy('created_at','DESC')->where('category_id', $category->id)->where('status',1)->paginate(4);
        }else{
            $articles = Article::orderBy('created_at','DESC')->where('status',1)->paginate(4);
        }

        $latestArticles = Article::orderBy('created_at','DESC')->where('status',1)->get()->take(3);


        



        
        return view('livewire.show-blog', ['articles'=>$articles, 'categorys'=>$categorys,'latestArticles'=> $latestArticles]);
    }
}
