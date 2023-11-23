<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Analytics;
use App\Models\GtagManager;
use App\Models\JenisLayanan;
use App\Models\Kontak;
use App\Models\Page;
use App\Models\TagManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    public function index()
    {
        $data['title'] = 'Rama Tranz - Kontak Kami | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Kontak Kami';
        $data['url'] = URL::current();
        $metades = "Percayakan perjalananmu hanya dengan Rama Tranz Travel. Terdapat fasilitas yang lengkap dengan harga yang murah.";

        $contacts = Kontak::where('id', 1)->first();
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $tentang = Page::get()->first();
        $tagManager = TagManager ::first();
        $seoPage = Page::where('slug', '=', 'kontak')->first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.kontak.index', compact('data', 'metades', 'contacts', 'menuLayanan', 'tentang','tagManager','seoPage','gtagManager','analytics'));
    }
}
