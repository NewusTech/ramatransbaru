<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Analytics;
use App\Models\Blog;
use App\Models\GtagManager;
use App\Models\JenisLayanan;
use App\Models\Kontak;
use App\Models\Page;
use App\Models\TagManager;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data['title'] = 'Rama Tranz - Blog Kami | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Home Screen';
        $data['url'] = URL::current();

        $blogs = Blog::latest()->paginate(9)->withQueryString();
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $contacts = Kontak::where('id', 1)->first();
        $tentang = Page::get()->first();
        $tagManager = TagManager::first();
        $seoPage = Page::where('slug', '=', 'blog')->first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.blog.index', compact('data', 'blogs', 'contacts', 'tentang', 'menuLayanan','tagManager','seoPage','gtagManager','analytics'));
    }

    public function liveSearch(Request $request)
    {
        $query = $request->input('query');
        $page = $request->input('page', 1); // Ambil nomor halaman, atau gunakan halaman 1 jika tidak ada
    
        // Lakukan pencarian di tabel 'blogs' berdasarkan query dengan paginasi
        $results = Blog::where('title', 'like', '%' . $query . '%')->paginate(9, ['*'], 'page', $page);
    
        // Kembalikan hasil pencarian beserta tautan halaman dalam respons JSON
        return response()->json($results);
    }
    


    public function detailBlog($slug)
    {
        $data['title'] = 'Rama Tranz - Detail Layanan Jasa Transportasi | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Detail Layanan Jasa Transportasi';
        $data['url'] = URL::current();

        $detailBlog = Blog::where('slug', $slug)->first();
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $contacts = Kontak::where('id', 1)->first();
        $tentang = Page::get()->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.blog.blogDetail', compact('data', 'detailBlog', 'contacts', 'tentang', 'menuLayanan','tagManager','gtagManager','analytics'));
    }
}
