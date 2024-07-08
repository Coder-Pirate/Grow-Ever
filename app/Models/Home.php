<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','status'];

    protected static function booted(): void
    {
        self::deleting(function (Home $home) {
            Storage::disk('public')->delete($home->image);
        });
    }
}
