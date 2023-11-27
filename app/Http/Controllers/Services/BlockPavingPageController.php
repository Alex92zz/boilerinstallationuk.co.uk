<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\LocalSEO;
use Illuminate\Http\Request;

class BlockPavingPageController extends Controller
{
    public function index()
    {

        $localSEOPages = LocalSEO::where("category_slug", "block-paving")->get();

        // Check if any records were found before passing to the view
        if ($localSEOPages->isNotEmpty()) {
            return view('services.block-paving', compact('localSEOPages'));
        } else {
            // Handle the case where no records are found (e.g., show a default view or redirect)
            return view('services.block-paving');
        }
    }
}

