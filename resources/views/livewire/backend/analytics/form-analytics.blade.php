<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Google Analytics') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-analytics') }}">{{ __('Google Analytics') }}</a></div>
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
                                            <label for="">Source</label>
                                            <input type="text"
                                                class="form-control @error('analytics.source') is-invalid @enderror"
                                                wire:model="analytics.source">
                                            @error('analytics.source')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Code</label>
                                            <input type="text"
                                                class="form-control @error('analytics.code') is-invalid @enderror"
                                                wire:model="analytics.code">
                                            @error('analytics.code')
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