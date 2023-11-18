<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Analytics;
use App\Models\FasilitasLayanan;
use App\Models\GtagManager;
use App\Models\JenisLayanan;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Page;
use App\Models\TagManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class LayananController extends Controller
{
    public function layananAll()
    {
        $data['title'] = 'Rama Tranz - Layanan Transportasi | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Layanan Carter';
        $data['url'] = URL::current();

        $layanan = Layanan::latest()->paginate(10)->withQueryString();
        $asals = DB::table('layanans')->select('asal')->distinct()->get()->pluck('asal');
        $tujuans = DB::table('layanans')->select('tujuan')->distinct()->get()->pluck('tujuan');
        $jenis_l = DB::table('layanans')->select('jenis_layanan_id')->distinct()->get()->pluck('jenis_layanan_id');
        $jenisLayanan = JenisLayanan::select(['id', 'title', 'slug'])->get();
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $contacts = Kontak::where('id', 1)->first();
        $tentang = Page::get()->first();

        $tagManager = TagManager::first();
        $seoPage = Page::where('slug', '=', 'jadwal')->first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.layanan.layananAll', compact('data', 'layanan', 'jenisLayanan', 'menuLayanan', 'asals', 'tujuans', 'jenis_l', 'contacts', 'tentang','tagManager','seoPage','gtagManager','analytics'));
    }

    public function layananByCategory(JenisLayanan $key)
    {
        $data['title'] = 'Rama Tranz - Layanan Transportasi | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Layanan Carter';
        $data['url'] = URL::current();

        $jenisLayanan = JenisLayanan::select(['id', 'title', 'slug','media','content'])->where('slug', $key->slug)->first();
        $jenisLayanan_all =  $key->layanan()->latest()->paginate(6);
        $asals = DB::table('layanans')->select('asal')->distinct()->get()->pluck('asal');
        $tujuans = DB::table('layanans')->select('tujuan')->distinct()->get()->pluck('tujuan');
        $jenis_l = DB::table('layanans')->select('jenis_layanan_id')->distinct()->get()->pluck('jenis_layanan_id');
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $contacts = Kontak::where('id', 1)->first();
        $tentang = Page::get()->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.layanan.categories.layananByCategory', compact('data', 'tentang', 'jenisLayanan', 'jenisLayanan_all', 'menuLayanan', 'asals', 'tujuans', 'jenis_l', 'contacts','tagManager','gtagManager','analytics'));
    }

    public function detailJasaTransportasi($slug)
    {
        $data['title'] = 'Rama Tranz - Detail Layanan Jasa Transportasi | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Detail Layanan Jasa Transportasi';
        $data['url'] = URL::current();


        $detailLayanan = Layanan::where('slug', $slug)->first();
        $jenisLayanan = JenisLayanan::select(['id', 'title', 'slug'])->get();
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $fasilitas = FasilitasLayanan::select(['id', 'nama_fasilitas', 'description', 'image'])->get();
        $contacts = Kontak::where('id', 1)->first();
        $tentang = Page::get()->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.layanan.layananDetail', compact('data', 'tentang', 'detailLayanan', 'fasilitas', 'jenisLayanan', 'menuLayanan', 'contacts','tagManager','gtagManager','analytics'));
    }

    public function searchLayanan(Request $request)
    {
        $data['title'] = 'Rama Tranz - Pencarian Layanan Jasa Transportasi | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Pencarian Layanan Jasa Transportasi';
        $data['url'] = URL::current();

        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        $jenisLayanan = JenisLayanan::select(['id', 'title', 'slug'])->get();
        $contacts = Kontak::where('id', 1)->first();
        $tentang = Page::get()->first();

        $asals = DB::table('layanans')->select('asal')->distinct()->get()->pluck('asal')->sort();
        $tujuans = DB::table('layanans')->select('tujuan')->distinct()->get()->pluck('tujuan')->sort();
        $jenis_l = DB::table('layanans')->select('jenis_layanan_id')->distinct()->get()->pluck('jenis_layanan_id')->sort();

        $layanan = Layanan::query();
        if ($request->filled('asal')) {
            $layanan->where('asal', $request->asal);
        }
        if ($request->filled('tujuan')) {
            $layanan->where('tujuan', $request->tujuan);
        }
        // if ($request->filled('jenis_layanan_id')) {
        //     $layanan->where('jenis_layanan_id', $request->jenis_layanan_id);
        // }
        if ($request->filled('jam')) {
            $layanan->where(function ($query) use ($request) {
                $query->orWhere('jam_pagi', 'like', '%'.$request->jam.'%');
                $query->orWhere('jam_siang', 'like', '%'.$request->jam.'%');
                $query->orWhere('jam_sore', 'like', '%'.$request->jam.'%');
                $query->orWhere('jam_malam', 'like', '%'.$request->jam.'%');
            });
        }

        // if ($request->filled('tgl_berangkat')) {
        //     $layanan->where('tgl_berangkat', $request->tgl_berangkat);
        // }
        $tagManager = '';
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        return view('frontend.layanan.searchLayanan', [
            'data' => $data,
            'menuLayanan' => $menuLayanan,
            'jenisLayanan' => $jenisLayanan,
            'contacts' => $contacts,
            'tentang' => $tentang,
            'asals' => $asals,
            'tujuans' => $tujuans,
            'jenis_l' => $jenis_l,
            'layanan' => $layanan->latest()->paginate(6),
            'tagManager' => $tagManager,
            'gtagManager' => $gtagManager,
            'analytics' => $analytics
        ]);
    }

    public function store(Request $request)
    {
        return $request->all();
        return view('frontend.layanan.searchLayanan');
    }

    public function indexJenisLayanan(){
        $data['title'] = 'Rama Tranz - Layanan Transportasi | Rama Transportasi';
        $data['image'] = '';
        $data['intro'] = 'Rama Trans adalah jasa Transportasi Terbaik.';
        $data['type'] = 'Layanan Ramatranz';
        $data['url'] = URL::current();

        $jenisLayanan = JenisLayanan::select(['id', 'title', 'slug','media','content'])->get();
        $tagManager = TagManager::first();
        $seoPage = Page::where('slug', '=', 'jadwal')->first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $tentang = Page::get()->first();
        $menuLayanan = JenisLayanan::select(['id', 'title', 'slug'])->orderBy('slug', 'ASC')->get();
        return view('frontend.jenis-layanan.index', compact(
                                                'data', 
                                                'tentang',
                                                'menuLayanan',
                                                'jenisLayanan', 
                                                'tagManager',
                                                'seoPage',
                                                'gtagManager',
                                                'analytics'
                                            ));
    }
}
