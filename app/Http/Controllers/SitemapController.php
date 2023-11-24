<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use App\Models\Layanan;
use App\Models\JenisLayanan;
use App\Models\ParentArea;
class SitemapController extends Controller
{
    public function index()
    {
        $routes = collect(Route::getRoutes())->map(function ($route) {
            return $route->uri();
        });

        $data = $routes->map(function ($route) {
            return [
                'loc' => url($route),
                'lastmod' => now()->toAtomString(),
            ];
        });

        $blog = Blog::all(); 
        $layanan = Layanan::all();
        $jenisLayanan = JenisLayanan::all();
        $lokasi = ParentArea::all();
        
        $xml = View::make('sitemap', compact('data', 'blog', 'layanan', 'jenisLayanan', 'lokasi'))->render();

        return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
