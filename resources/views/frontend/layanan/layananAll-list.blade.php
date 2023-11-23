@foreach ($layanan as $layanans)
    <div class="card" style="width:100%;">
        <a href="{{ route('detail-jasa-transportasi.jasaId', $layanans->slug) }}" class="sm-hover">
            <img class="card-img-top" src="{{ Storage::disk('s3')->url($layanans->image) }}" alt="Card image"
                style="width:100%">
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
    <div class="col-md-12">
        <nav aria-label="Page navigation example">
            <div id="pagination">
                {{ $layanan->links() }}
            </div>
        </nav>
    </div>
</div>
