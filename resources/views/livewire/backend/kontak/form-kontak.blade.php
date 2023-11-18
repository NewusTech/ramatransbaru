<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Kontak') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-faq') }}">{{ __('Kontak')
                            }}</a></div>
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
                                            <label for="">Alamat</label>
                                            <textarea wire:model="kontak.alamat"
                                                class="form-control @error('kontak.alamat') is-invalid @enderror"></textarea>

                                            @error('kontak.alamat')
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
                                                class="form-control @error('kontak.lat') is-invalid @enderror"
                                                wire:model="kontak.lat">
                                            @error('kontak.lat')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Longitude <small class="text-danger">(Ambil titik melalui
                                                    google maps)</small></label>
                                            <input type="text" placeholder="contoh: 105.25843412555126"
                                                class="form-control @error('kontak.lng') is-invalid @enderror"
                                                wire:model="kontak.lng">
                                            @error('kontak.lng')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email"
                                                class="form-control @error('kontak.email') is-invalid @enderror"
                                                wire:model="kontak.email">
                                            @error('kontak.email')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon Travel 1</label>
                                            <input type="number"
                                                class="form-control @error('kontak.phone_tr_1') is-invalid @enderror"
                                                wire:model="kontak.phone_tr_1">
                                            @error('kontak.phone_tr_1')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon Travel 2</label>
                                            <input type="number"
                                                class="form-control @error('kontak.phone_tr_2') is-invalid @enderror"
                                                wire:model="kontak.phone_tr_2">
                                            @error('kontak.phone_tr_2')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon Cargo 1</label>
                                            <input type="number"
                                                class="form-control @error('kontak.phone_cr_1') is-invalid @enderror"
                                                wire:model="kontak.phone_cr_1">
                                            @error('kontak.phone_cr_1')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon Cargo 2</label>
                                            <input type="number"
                                                class="form-control @error('kontak.phone_cr_2') is-invalid @enderror"
                                                wire:model="kontak.phone_cr_2">
                                            @error('kontak.phone_cr_2')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">WhatsApp 1</label>
                                            <input type="number"
                                                class="form-control @error('kontak.wa_1') is-invalid @enderror"
                                                wire:model="kontak.wa_1">
                                            @error('kontak.wa_1')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">WhatsApp 2</label>
                                            <input type="number"
                                                class="form-control @error('kontak.wa_2') is-invalid @enderror"
                                                wire:model="kontak.wa_2">
                                            @error('kontak.wa_2')
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