<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as ImageFacade;
use App\Models\Image as ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Events\PostCreated;
use App\Models\Boiler;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\LocalSEO;
use App\Models\Post;
use App\Models\Project;

class LocalSEOController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = LocalSEO::where('slug', $slug)->firstOrFail();

        $localSEOPages = LocalSEO::where('category_slug', $post->category_slug)->get();

        $boilers = Boiler::take(3)
            ->get();

        $recentPosts = Post::latest()
            ->take(3)
            ->get();

        return view('localSEO.show', compact('recentPosts', 'post', 'boilers', 'localSEOPages'));
        }
    }
