<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Pages') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-page') }}">{{ __('Pages') }}</a></div>
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
                                                class="form-control @error('pages.title') is-invalid @enderror"
                                                wire:model="pages.title">
                                            @error('pages.title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Slug</label>
                                            <input type="text"
                                                class="form-control @error('pages.slug') is-invalid @enderror"
                                                wire:model="pages.slug">
                                            @error('pages.slug')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Meta Desc</label>
                                            <input type="text"
                                                class="form-control @error('pages.meta_desc') is-invalid @enderror"
                                                wire:model="pages.meta_desc">
                                            @error('pages.meta_desc')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Seo Title</label>
                                            <input type="text"
                                                class="form-control @error('pages.seo_title') is-invalid @enderror"
                                                wire:model="pages.seo_title">
                                            @error('pages.seo_title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Deskripsi Singkat</label>
                                            <textarea wire:model="pages.short_description"
                                                class="form-control @error('pages.short_description') is-invalid @enderror"></textarea>

                                            @error('pages.short_description')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" wire:ignore>
                                    <label for="">Isi Konten</label>
                                    <textarea name="" id="" class="form-control wysiwyg @error('pages.content') is-invalid @enderror"
                                        data-model="pages.content" wire:model="pages.content">{{ $pages ? $pages->content : '' }}</textarea>
                                    @error('pages.content')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file"
                                        class="form-control-file @error('gambar') is-invalid @enderror"
                                        wire:model="gambar" aria-describedby="fileHelpId">
                                    @error('gambar')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                    @if ($gambar)
                                        <div class="mt-2">
                                            <label for="preview">Preview:</label>
                                            <img src="{{ $gambar->temporaryUrl() }}" alt="Preview"
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($pages->media)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($pages->media) }}" alt="Current Image"
                                            class="img-thumbnail">
                                    @endif
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
