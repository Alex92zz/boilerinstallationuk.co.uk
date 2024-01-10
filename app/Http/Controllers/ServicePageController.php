<?php

namespace App\Http\Controllers;

use App\Models\Boiler;
use App\Models\LocalSEO;
use App\Models\Post;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function installation ()
    {

        $localSEOPages = LocalSEO::where('category', 'Boiler Installation')->get();

        $boilers = Boiler::all();
        $recentPosts = Post::latest()
            ->take(3)
            ->get();

        return view('services.boiler-installation', compact('recentPosts', 'boilers', 'localSEOPages'));
    }

    public function repair()
    {
        $localSEOPages = LocalSEO::where('category', 'Boiler Repair')->get();

        $boilers = Boiler::all();
        $recentPosts = Post::latest()
            ->take(3)
            ->get();

        return view('services.boiler-repair', compact('recentPosts', 'boilers', 'localSEOPages'));
    }

    public function service()
    {
        $localSEOPages = LocalSEO::where('category', 'Boiler Service')->get();

        $boilers = Boiler::all();
        $recentPosts = Post::latest()
            ->take(3)
            ->get();

        return view('services.boiler-service', compact('recentPosts', 'boilers', 'localSEOPages'));
    }
}
