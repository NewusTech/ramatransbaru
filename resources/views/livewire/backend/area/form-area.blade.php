<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Area') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-area') }}">{{ __('Area') }}</a></div>
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
                                            <label for="">Nama Kota/Kabupaten</label>
                                            <input type="text"
                                                class="form-control @error('area.kota_kab') is-invalid @enderror"
                                                wire:model="area.kota_kab">
                                            @error('area.kota_kab')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Provinsi</label>
                                            <select wire:model="area.parent_areas_id"
                                                class="form-control @error('area.parent_areas_id') is-invalid @enderror"
                                                name="" id="">
                                                <option>-- Pilih Nama Provinsi --
                                                </option>

                                                @foreach ($nm_provinsi as $provinsi)
                                                <option value="{{ $provinsi->id }}">
                                                    {{$provinsi->nama_provinsi}}</option>
                                                @endforeach
                                            </select>
                                            @error('area.parent_areas_id')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <textarea wire:model="area.alamat"
                                                class="form-control @error('area.alamat') is-invalid @enderror"></textarea>

                                            @error('area.alamat')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Latitude <small class="text-danger">(Ambil titik melalui
                                                    google
                                                    maps)</small></label>
                                            <input type="text" placeholder="contoh: -5.402853097367839"
                                                class="form-control @error('area.lat') is-invalid @enderror"
                                                wire:model="area.lat">
                                            @error('area.lat')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Longitude <small class="text-danger">(Ambil titik melalui
                                                    google maps)</small></label>
                                            <input type="text" placeholder="contoh: 105.25843412555126"
                                                class="form-control @error('area.lng') is-invalid @enderror"
                                                wire:model="area.lng">
                                            @error('area.lng')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="">Nama Kantor <small class="text-danger">(Diisi bila ada nama
                                                    kantor kamu)</small></label>
                                            <input type="text" placeholder="boleh dikosongkan..."
                                                class="form-control @error('area.isHQ') is-invalid @enderror"
                                                wire:model="area.isHQ">
                                            @error('area.isHQ')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="">Nama Pengguna</label>
                                            <input type="text"
                                                class="form-control @error('area.nama_phone') is-invalid @enderror"
                                                wire:model="area.nama_phone">
                                            @error('area.nama_phone')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon 1</label>
                                            <input type="number"
                                                class="form-control @error('area.phone_1') is-invalid @enderror"
                                                wire:model="area.phone_1">
                                            @error('area.phone_1')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon 2</label>
                                            <input type="number"
                                                class="form-control @error('area.phone_2') is-invalid @enderror"
                                                wire:model="area.phone_2">
                                            @error('area.phone_2')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">WhatsApp</label>
                                            <input type="number"
                                                class="form-control @error('area.wa') is-invalid @enderror"
                                                wire:model="area.wa">
                                            @error('area.wa')
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