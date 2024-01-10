<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as ImageFacade;
use App\Models\Image as ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Events\PostCreated;
use App\Models\Boiler;
use App\Models\LocalSEO;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('images')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $localSEOPages = LocalSEO::where('category', $post->category)->get();

        $randomPosts =  Post::inRandomOrder()->take(4)->get();

        $boilers = Boiler::all();
        
        return view("posts.show", compact('post', 'randomPosts', 'localSEOPages', 'boilers'));
    }


}
