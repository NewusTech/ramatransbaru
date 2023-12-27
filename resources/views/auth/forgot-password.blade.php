<x-guest-layout>


    <div class="mb-3 text-white">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <x-jet-validation-errors class="mb-3" />
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

    <form method="POST" action="/forgot-password">
        @csrf

        <div class="form-group">
            <x-jet-label value="Email" />
            <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-login btn-lg btn-block" tabindex="4">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>

</x-guest-layout>
