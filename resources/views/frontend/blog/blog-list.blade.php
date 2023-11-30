<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Rama Tranz Travel Terpercaya, Kunjungi Kami di Blog - {{ $title2 }}</title>
    <meta name="author" content="Rama Tranz Travel">
    <meta name="description" content='Rama Tranz Travel Penyedia Agen Perjalanan, Baca Artikel ke {{ $title2 }}'>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend-assets') }}/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend-assets') }}/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend-assets') }}/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend-assets') }}/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend-assets') }}/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend-assets') }}/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend-assets') }}/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend-assets') }}/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend-assets') }}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('frontend-assets') }}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend-assets') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('frontend-assets') }}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend-assets') }}/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ url('assets-plesir/lib/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ url('frontend-assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/normalize.css') }} ">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/theme.css') }} ">
</head>

<div class="subsite-banner">
    <img src="https://ramatranzlampung.com/storage/jenis-layanan/90hVpgV5oMu32B8TQNGxbpHiGxc8TYifaH24IkSY.jpg">
</div>
<div class="subsite subsite-with-banner">
    <div class="row">
        <div class="col-md-12">
            <div class="sm-title-heading">
                <h1>
                    Blog
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="search-form search-content">
                <div class="search-wrapper ">
                    <input id="search" placeholder="Search...">
                </div>
            </div>
        </div>
    </div>
    <div>
        @foreach ($blogs as $blog)
            <div class="row news-row">
                <div class="col-md-12">
                    <div class="news-card">
                        <div class="nc-top">
                            <div class="nc-left">
                                <div class="ncl-image">
                                    <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                        <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="nc-right">
                                <div class="ncr-row-a">
                                    <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                        {{ $blog->title }}
                                    </a>
                                </div>
                                <div class="ncr-row-b">
                                    {{ Str::limit($blog->excerpt, 250, '...') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <h1 style="display: none;">Menjelajahi Dunia dengan Jasa Travel: Mengungkap Pesona dan Manfaatnya
            Pendahuluan</h1>
        <h2 style="display: none;">Jasa travel telah menjadi bagian tak terpisahkan dari gaya hidup modern, mengubah
            cara orang menjelajahi dan
            merasakan keindahan dunia. Dengan berbagai opsi dan kemudahan yang ditawarkan, jasa travel tidak hanya
            menawarkan sarana transportasi tetapi juga membuka pintu petualangan yang tak terlupakan. Artikel ini akan
            membahas sejumlah aspek yang melibatkan jasa travel, dari kenyamanan hingga manfaatnya bagi para pelancong.
        </h2>
        <p style="display: none;">
            1. Kemudahan dan Kenyamanan

            Jasa travel memberikan kemudahan dan kenyamanan yang luar biasa bagi pelancong modern. Dari pemesanan tiket
            online hingga penjemputan di depan pintu rumah, agen perjalanan berusaha untuk membuat perjalanan seefisien
            mungkin. Layanan ini membebaskan pelancong dari kerumitan perencanaan detail perjalanan, memungkinkan mereka
            untuk fokus pada pengalaman dan petualangan yang menanti di tempat tujuan.

            2. Ragam Destinasi

            Salah satu keunggulan utama jasa travel adalah ragam destinasi yang dapat diakses oleh pelancong. Dari
            kota-kota metropolitan yang sibuk hingga pulau terpencil, agen perjalanan menawarkan paket perjalanan yang
            mencakup berbagai pilihan destinasi. Ini memungkinkan para pelancong untuk menyesuaikan pengalaman mereka
            sesuai dengan preferensi pribadi, menjadikan setiap perjalanan sebagai kisah unik yang tak terlupakan.

            3. Paket Liburan

            Jasa travel seringkali menawarkan paket liburan yang komprehensif, mencakup tiket pesawat, akomodasi, dan
            seringkali tur lokal. Paket semacam itu tidak hanya memudahkan perjalanan tetapi juga dapat menghemat waktu
            dan uang bagi pelancong. Para pelancong dapat memilih paket yang sesuai dengan anggaran mereka, memastikan
            bahwa mereka mendapatkan nilai yang optimal untuk setiap dolar yang diinvestasikan dalam petualangan mereka.

            4. Memajukan Pariwisata Lokal

            Jasa travel berperan penting dalam memajukan sektor pariwisata lokal. Dengan membawa sejumlah besar
            pelancong ke destinasi tertentu, mereka memberikan dorongan ekonomi yang signifikan melalui pengeluaran
            wisatawan untuk makanan, belanja, dan pengalaman lokal. Ini tidak hanya menguntungkan industri pariwisata,
            tetapi juga dapat menciptakan peluang pekerjaan baru dan meningkatkan taraf hidup komunitas lokal.

            5. Fasilitas dan Layanan Tambahan

            Selain tiket pesawat dan akomodasi, jasa travel juga menawarkan berbagai fasilitas dan layanan tambahan.
            Mulai dari penyewaan mobil hingga tur petualangan, pelancong dapat dengan mudah menambahkan elemen tambahan
            ke rencana perjalanan mereka. Ini membuka pintu untuk pengalaman yang lebih kaya dan mendalam, memungkinkan
            pelancong untuk menyesuaikan perjalanan mereka sesuai dengan minat dan keinginan pribadi.

            Kesimpulan

            Dengan mempertimbangkan kemudahan, kenyamanan, dan manfaat ekonomi yang ditawarkan, jasa travel memainkan
            peran kunci dalam memfasilitasi eksplorasi dunia. Dari destinasi populer hingga tempat-tempat terpencil yang
            belum dijelajahi, agen perjalanan memungkinkan setiap individu untuk menemukan pesona dunia dengan cara yang
            paling sesuai dengan kebutuhan dan keinginan mereka. Oleh karena itu, merencanakan perjalanan dengan bantuan
            jasa travel tidak hanya tentang perpindahan dari satu tempat ke tempat lain, tetapi juga tentang membangun
            kenangan seumur hidup.</p>

        <div class="row car-row pagination-row">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <div id="pagination">
                        {{ $blogs->links() }}
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>
