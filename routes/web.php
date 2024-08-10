<?php

use App\Http\Controllers\Backend\Area;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\JadwalController;
use App\Http\Controllers\Frontend\GalleryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/link', function () {
    Artisan::call('cache:clear');
    Artisan::call('storage:link');
});

//frontend routes
// Route::get('/', [HomeController::class, 'index'])->name('homescreen');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/', [HomeController::class, 'portal'])->name('beranda');

Route::post('/order-store', [HomeController::class, 'store']);

Route::get('/review', [ReviewController::class, 'index', 'review']);

Route::post('/input-review', [ReviewController::class, 'inputreview', 'inputreview']);

Route::get('/tentang-kami.html', [AboutController::class, 'index'])->name('tentang-kami');

Route::get('/jadwal.html', [JadwalController::class, 'index'])->name('jadwal');

Route::get('/gallery.html', [GalleryController::class, 'index'])->name('gallery');
Route::get('/filterGallery', [GalleryController::class, 'filterGallery'])->name('filter-gallery');

Route::get('/kontak-kami.html', [ContactController::class, 'index'])->name('kontak-kami');

Route::prefix('tarif.html')->group(function () {
    Route::get('/', [LayananController::class, 'layananAll'])->name('tarif');    
    Route::get('/search', [LayananController::class, 'liveSearch'])->name('search-rute');
});

Route::get('/jenis-layanan.html', [LayananController::class, 'indexJenisLayanan'])->name('jenis-layanan');


Route::prefix('detail-jasa-transportasi')->group(function () {
    Route::get('/{slug}.html', [LayananController::class, 'detailJasaTransportasi'])->name('detail-jasa-transportasi.jasaId');
});

Route::prefix('lokasi-kami')->group(function () {
    Route::get('/{key:slug}', [LocationController::class, 'locationOutlet'])->name('locationId');
});

Route::prefix('layanan')->group(function () {
    Route::get('/{key:slug}', [LayananController::class, 'layananByCategory'])->name('layananCategoryId');
});

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/{slug}.html', [BlogController::class, 'detailBlog'])->name('detail-blog.blogId');
    Route::get('/search', [BlogController::class, 'liveSearch']);
});

//backend routes
Route::middleware(['auth:web', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', \App\Http\Livewire\Dashboard::class)->name('dashboard');


    Route::prefix('user')->group(function () {
        Route::get('/', \App\Http\Livewire\User\User::class)->middleware(['can:users'])->name('user');
        Route::get('create', \App\Http\Livewire\User\Form\FormUser::class)->middleware(['can:users.create'])->name('createuser');
        Route::get('edit/{id}', \App\Http\Livewire\User\Form\FormUser::class)->middleware(['can:users.edit'])->name('edituser');


        Route::get('roles', \App\Http\Livewire\User\Roles::class)->middleware(['can:roles'])->name('roles');
        Route::get('permissions', \App\Http\Livewire\Permissions::class)->middleware(['can:permissions'])->name('permissions');
        Route::get('info/{id?}', \App\Http\Livewire\User\UserProfile::class)->name('user-profile');
    });



    Route::prefix('blog')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Blog\Blogs::class)->name('data-blog');
        Route::get('/create', App\Http\Livewire\Backend\Blog\FormBlog::class)->name('create-blog');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Blog\FormBlog::class)->name('edit-blog');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Blog\DetailBlog::class)->name('detail-blog');

        // Route::get('/{slug}.html', App\Http\Livewire\Frontend\Blog\DetailBlog::class)->name('detail-blog');
    });
    
    //start - syukron488@gmail.com 
    Route::prefix('tag')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Tag\Tags::class)->name('data-tag');
        Route::get('/create', App\Http\Livewire\Backend\Tag\FormTag::class)->name('create-tag');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Tag\FormTag::class)->name('edit-tag');
        Route::get('/{id}.html', App\Http\Livewire\Backend\Tag\DetailTag::class)->name('detail-tag');
    });

    Route::prefix('gtagmanager')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\GtagManager\GtagManager::class)->name('data-gtagmanager');
        Route::get('/create', App\Http\Livewire\Backend\GtagManager\FormGtagManager::class)->name('create-gtagmanager');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\GtagManager\FormGtagManager::class)->name('edit-gtagmanager');
        Route::get('/{id}.html', App\Http\Livewire\Backend\GtagManager\DetailGtagManager::class)->name('detail-gtagmanager');
    });

    Route::prefix('analytics')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Analytics\Analytics::class)->name('data-analytics');
        Route::get('/create', App\Http\Livewire\Backend\Analytics\FormAnalytics::class)->name('create-analytics');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Analytics\FormAnalytics::class)->name('edit-analytics');
        Route::get('/{id}.html', App\Http\Livewire\Backend\Analytics\DetailAnalytics::class)->name('detail-analytics');
    });
    //end - syukron488@gmail.com 

    Route::prefix('jenis-layanan')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\JenisLayanan\JenisLayanan::class)->name('data-jenis-layanan');
        Route::get('/create', App\Http\Livewire\Backend\JenisLayanan\FormJenisLayanan::class)->name('create-jenis-layanan');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\JenisLayanan\FormJenisLayanan::class)->name('edit-jenis-layanan');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\JenisLayanan\DetailJenisLayanan::class)->name('detail-jenis-layanan');
    });

    Route::prefix('layanan')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Layanan\Layanans::class)->name('data-layanan');
        Route::get('/create', App\Http\Livewire\Backend\Layanan\FormLayanan::class)->name('create-layanan');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Layanan\FormLayanan::class)->name('edit-layanan');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Layanan\DetailLayanan::class)->name('detail-layanan');
    });

    Route::prefix('fasilitas-layanan')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\FasilitasLayanan\FasilitasLayanan::class)->name('data-fasilitas-layanan');
        Route::get('/create', App\Http\Livewire\Backend\FasilitasLayanan\FormFasilitasLayanan::class)->name('create-fasilitas-layanan');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\FasilitasLayanan\FormFasilitasLayanan::class)->name('edit-fasilitas-layanan');
        Route::get('/{id}', App\Http\Livewire\Backend\FasilitasLayanan\DetailFasilitasLayanan::class)->name('detail-fasilitas-layanan');
    });

    Route::prefix('unggulan-layanan')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Unggulan\Unggulan::class)->name('data-unggulan');
        Route::get('/create', App\Http\Livewire\Backend\Unggulan\FormUnggulan::class)->name('create-unggulan');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Unggulan\FormUnggulan::class)->name('edit-unggulan');
        Route::get('/{id}', App\Http\Livewire\Backend\Unggulan\DetailUnggulan::class)->name('detail-unggulan');
    });

    Route::prefix('history-pesanan')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\HistoryPesanan\HistoryPesanan::class)->name('history-pesanan');
        Route::get('/{id}', App\Http\Livewire\Backend\HistoryPesanan\DetailHistoryPesanan::class)->name('detail-history-pesanan');
    });

    Route::prefix('faq')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Faq\Faqs::class)->name('data-faq');
        Route::get('/create', App\Http\Livewire\Backend\Faq\FormFaq::class)->name('create-faq');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Faq\FormFaq::class)->name('edit-faq');
        Route::get('/{id}', App\Http\Livewire\Backend\Faq\DetailFaq::class)->name('detail-faq');
    });

    Route::prefix('feedback')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Feedback\Feedback::class)->name('data-feedback');
        Route::get('/create', App\Http\Livewire\Backend\Feedback\FormFeedback::class)->name('create-feedback');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Feedback\FormFeedback::class)->name('edit-feedback');
        Route::get('/{id}', App\Http\Livewire\Backend\Feedback\DetailFeedback::class)->name('detail-feedback');
    });

    Route::prefix('page')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Page\Pages::class)->name('data-page');
        Route::get('/create', App\Http\Livewire\Backend\Page\FormPage::class)->name('create-page');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Page\FormPage::class)->name('edit-page');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Page\DetailPage::class)->name('detail-page');
    });
  
  	Route::prefix('landing')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Landing\Landings::class)->name('data-landing');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Landing\FormLanding::class)->name('edit-landing');
        Route::get('/view/{id}', App\Http\Livewire\Backend\Landing\DetailPage::class)->name('detail-landing');
    });

    Route::prefix('jadwal')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Jadwal\Jadwals::class)->name('data-jadwal');
        Route::get('/create', App\Http\Livewire\Backend\Jadwal\FormJadwal::class)->name('create-jadwal');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Jadwal\FormJadwal::class)->name('edit-jadwal');
        Route::get('/view/{id}', App\Http\Livewire\Backend\Jadwal\DetailJadwal::class)->name('detail-jadwal');
    });

    Route::prefix('parent-area')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\ParentArea\ParentArea::class)->name('data-parent-area');
        Route::get('/create', App\Http\Livewire\Backend\ParentArea\FormParentArea::class)->name('create-parent-area');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\ParentArea\FormParentArea::class)->name('edit-parent-area');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\ParentArea\DetailParentArea::class)->name('detail-parent-area');
    });

    Route::prefix('area')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Area\Area::class)->name('data-area');
        Route::get('/create', App\Http\Livewire\Backend\Area\FormArea::class)->name('create-area');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Area\FormArea::class)->name('edit-area');
        Route::get('/{id}', App\Http\Livewire\Backend\Area\DetailArea::class)->name('detail-area');
    });

    Route::prefix('kontak')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Kontak\Kontak::class)->name('data-kontak');
        Route::get('/create', App\Http\Livewire\Backend\Kontak\FormKontak::class)->name('create-kontak');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Kontak\FormKontak::class)->name('edit-kontak');
        Route::get('/{id}', App\Http\Livewire\Backend\Kontak\DetailKontak::class)->name('detail-kontak');
    });

    Route::prefix('link-youtube')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Youtube\Youtube::class)->name('data-youtube');
        Route::get('/create', App\Http\Livewire\Backend\Youtube\FormYoutube::class)->name('create-youtube');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Youtube\FormYoutube::class)->name('edit-youtube');
        Route::get('/{id}', App\Http\Livewire\Backend\Youtube\DetailYoutube::class)->name('detail-youtube');
    });

    Route::prefix('carousel')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Carousel\Carousel::class)->name('data-carousel');
        Route::get('/create', App\Http\Livewire\Backend\Carousel\FormCarousel::class)->name('create-carousel');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Carousel\FormCarousel::class)->name('edit-carousel');
        Route::get('/{id}', App\Http\Livewire\Backend\Carousel\DetailCarousel::class)->name('detail-carousel');
    });

    Route::prefix('gallery')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Gallery\Gallery::class)->name('data-gallery');
        Route::get('/create', App\Http\Livewire\Backend\Gallery\FormGallery::class)->name('create-gallery');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Gallery\FormGallery::class)->name('edit-gallery');
        Route::get('/{id}', App\Http\Livewire\Backend\Gallery\DetailGallery::class)->name('detail-gallery');
    });

    // syukron488@gmail.com
    Route::prefix('seo')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Seo\SeoTools::class)->name('data-seo');
        // Route::get('/create', App\Http\Livewire\Backend\Tag\FormTag::class)->name('create-tag');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Seo\FormSeo::class)->name('edit-seo');
        Route::get('/{id}.html', App\Http\Livewire\Backend\Seo\DetailSeo::class)->name('detail-seo');
    });

    Route::prefix('search-console')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\SearchConsole\SearchConsole::class)->name('data-search-console');
        // Route::get('/create', App\Http\Livewire\Backend\Tag\FormTag::class)->name('create-tag');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\SearchConsole\FormSearchConsole::class)->name('edit-search-console');
        Route::get('/{id}.html', App\Http\Livewire\Backend\SearchConsole\DetailSearchConsole::class)->name('detail-search-console');
    });
    // syukron488@gmail.com

    Route::get('config', \App\Http\Livewire\Config::class)->name('config');


    Route::get('notif/read/{id}', [\App\Http\Controllers\ReadNotif::class, 'index'])->name('readnotif');


    Route::get('clearnotif', function () {
        return markNotificationAsRead();
    })->name('clearnotif');

    Route::get('clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize');
        return "all clear";
    })->role('Superadmin');
});
