<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','iteam_id','author','image','content','status'];

    protected static function booted(): void
    {
        self::deleting(function (Project $project) {
            Storage::disk('public')->delete($project->image);
        });
    }
}
