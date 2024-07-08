<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Guid\Guid;

class Membar extends Model
{
    use HasFactory;
    protected $fillable = ['name','designation','fb_url','tw_url','in_url','image','status'];

    protected static function booted(): void
    {
        self::deleting(function (Membar $membar) {
            Storage::disk('public')->delete($membar->image);
        });
    }
    
}
