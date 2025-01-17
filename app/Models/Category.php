<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function category()
    {
        return $this->hasMany(Project::class);
    }

    public function localSEO()
    {
        return $this->hasMany(LocalSEO::class);
    }
}
