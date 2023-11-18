<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Blog;
class SitemapController extends Controller
{
    public function index()
    {
        $blog = Blog::all(); 
        $sitemap = view('sitemap', compact('blog'))->render();

        return Response::make($sitemap, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
