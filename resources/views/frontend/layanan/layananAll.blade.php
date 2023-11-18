@extends('frontend.layouts.app-plesir')
@section('title', 'Rute')
@section('content')

    <div class="content-wrap page-rute">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>Rute</h1>
                    </div>
                </div>
            </div>
            <div class="container sm-box-shadow">
                @foreach ($layanan as $layanans)
                    <div class="card" style="width:100%;">
                        <a href="{{ route('detail-jasa-transportasi.jasaId', $layanans->slug) }}" class="sm-hover">
                            <img class="card-img-top" src="{{ Storage::disk('s3')->url($layanans->image) }}"
                                alt="Card image" style="width:100%">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('detail-jasa-transportasi.jasaId', $layanans->slug) }}" class="sm-hover-blue">
                                <h4 class="card-title">{{ $layanans->title }}</h4>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=628117298168&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F"
                                class="theme-button">Pesan</a>
                        </div>
                    </div>
                @endforeach
                <div class="row car-row pagination-row">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation example">
                            {{ $layanan->links() }}

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script type="text/javascript">
        $(document).on('click', '.details-button', function(e) {
            e.preventDefault();
            var item = $(this).data('item');
        })

        function formSubmitIndex(idForm, sendWa) {
            var name = $('#namePenumpang-' + idForm).val();
            var noHp = $('#no_hp-' + idForm).val();
            var tglBerangkat = $('#tgl_keberangkatan-' + idForm).val();
            var waktu = $('#waktu-' + idForm).find(":selected").val();
            var rute = $('#rute-' + idForm).val();

            var tempat_duduk = $('#tempat_duduk-' + idForm).val();
            var titik_jemput = $('#titik_jemput-' + idForm).val();

            if (name.trim() == '') {
                alert('Silakan isi nama terlebih dahulu.');
                $('#namePenumpang').focus();
                return false;
            }

            if (noHp.trim() == '') {
                alert('Silakan isi nomor hp terlebih dahulu.');
                $('#no_hp').focus();
                return false;
            }

            if (tglBerangkat.trim() == '') {
                alert('Silakan isi tanggal berangkat terlebih dahulu.');
                $('#tgl_keberangkatan').focus();
                return false;
            }

            if (titik_jemput.trim() == '') {
                alert('Silakan isi titik jemput terlebih dahulu.');
                $('#titik_jemput').focus();
                return false;
            }
            window.open(sendWa + '&text=Nama%3A%20' + name + '+%20%0ANo.%20hp%3A%20' + noHp + '%20%0ATanggal%20%3A%20' +
                tglBerangkat + '%20%20%0Awaktu%20%20%3A%20' + waktu + '%20%0ARute%20%3A%20' + rute +
                '%20%20%0ATempat%20Duduk%3A%20' + tempat_duduk + '%0ATitik%20Jemput%3A%20' + titik_jemput + '')
        }

        $(".card").hover(
            function() {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            },
            function() {
                $(this).removeClass('shadow-lg');
            }
        );
    </script>
@endsection
