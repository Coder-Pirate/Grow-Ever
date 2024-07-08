<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','content','status'];

    protected static function booted(): void
    {
        self::deleting(function (Page $page) {
            Storage::disk('public')->delete($page->image);
        });
    }
}
