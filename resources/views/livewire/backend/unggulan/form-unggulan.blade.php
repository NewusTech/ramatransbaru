<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Unggulan Layanan') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-unggulan') }}">{{ __('Unggulan Layanan') }}</a>
                    </div>
                    <div class="breadcrumb-item">{{ __('Tambah') }}</div>
                </div>

            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Judul</label>
                                            <input type="text"
                                                class="form-control @error('unggulan.title') is-invalid @enderror"
                                                wire:model="unggulan.title">
                                            @error('unggulan.title')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jenis Jasa Layanan</label>
                                            <select wire:model="unggulan.icon"
                                                class="form-control @error('unggulan.icon') is-invalid @enderror"
                                                name="" id="">
                                                <option>-- Pilih Ikon Unggulan
                                                    Layanan --
                                                </option>
                                                <option value="flaticon-suntour-world">Icon Bola Dunia</option>
                                                <option value="flaticon-suntour-car">Ikon Mobil</option>
                                                <option value="flaticon-favorite">Ikon Bintang</option>
                                                <option value="flaticon-suntour-hotel">Ikon Hotel</option>
                                                <option value="flaticon-suntour-ship">Ikon Kapal Laut</option>
                                                <option value="flaticon-suntour-airplane">Ikon Pesawat</option>
                                                <option value="flaticon-suntour-map">Ikon Lokasi</option>
                                                <option value="flaticon-people">Ikon Orang</option>
                                                <option value="flaticon-suntour-photo">Ikon Kamera</option>
                                                <option value="flaticon-suntour-calendar">Ikon Kalendar</option>
                                                <option value="flaticon-suntour-mobile-phone">Ikon Handphone</option>
                                                <option value="flaticon-suntour-phone">Ikon Telepon</option>
                                            </select>
                                            @error('unggulan.icon')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <textarea wire:model="unggulan.desc" rows="5"
                                                class="form-control @error('unggulan.desc') is-invalid @enderror"></textarea>

                                            @error('unggulan.desc')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" wire:click.prevent="save">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@push('scripts')
<script>
    window.initSummernote = () => {
    $(".wysiwyg").summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'help']],
        ],
        height: 200,
        dialogsInBody: true
    });
}

initSummernote();
window.livewire.on('summernote', () => {
    initSummernote();
});

window.addEventListener('summernote', function() {
    initSummernote();
})

$(".wysiwyg").on('summernote.blur', function() {
    val = $(this).val();
    @this.set($(this).data('model'), val);
    console.log(val);
})

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>

@endpush