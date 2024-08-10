<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Landing') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-landing') }}">{{ __('Landing') }}</a></div>
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
                                            <label for="">Name Header</label>
                                            <input type="text" value="{{ $landing->name_header }}"
                                                class="form-control @error('landing.name_header') is-invalid @enderror"
                                                wire:model="landing.name_header">
                                            @error('landing.name_header')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" value="{{ $landing->title }}"
                                                class="form-control @error('landing.title') is-invalid @enderror"
                                                wire:model="landing.title">
                                            @error('landing.title')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sub Title</label>
                                            <input type="text" value="{{ $landing->sub_title }}"
                                                class="form-control @error('landing.sub_title') is-invalid @enderror"
                                                wire:model="landing.sub_title">
                                            @error('landing.sub_title')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group" wire:ignore>
                                            <label for="">Description</label>
                                            <textarea type="text" name="" id=""
                                                class="form-control wysiwyg @error('landing.desc') is-invalid @enderror"
                                                data-model="landing.desc"
                                                wire:model="landing.desc">{{ $landing ?  $landing->desc : '' }}</textarea>
                                            @error('landing.desc')
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
