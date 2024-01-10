<?php

namespace App\Http\Controllers;

use App\Models\Boiler;
use App\Models\LocalSEO;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        $localSEOPages = LocalSEO::where('category_slug', 'boiler-installation')->get();

        $boilers = Boiler::take(3)
            ->get();

            
        return view('blog', compact('posts', 'boilers', 'localSEOPages'));
    }
}
