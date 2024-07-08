<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title','category_id','author','image','content','status'];

    protected static function booted(): void
    {
        self::deleting(function (Article $article) {
            Storage::disk('public')->delete($article->image);
        });
    }
}
