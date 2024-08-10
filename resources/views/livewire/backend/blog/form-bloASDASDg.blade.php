<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Blog') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-blog') }}">{{ __('Blog') }}</a></div>
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
                                                class="form-control @error('blogs.title') is-invalid @enderror"
                                                wire:model="blogs.title">
                                            @error('blogs.title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Slug</label>
                                            <input type="text"
                                                class="form-control @error('blogs.slug') is-invalid @enderror"
                                                wire:model="blogs.slug">
                                            @error('blogs.slug')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Singkat</label>
                                            <textarea wire:model="blogs.excerpt" class="form-control @error('blogs.excerpt') is-invalid @enderror"></textarea>

                                            @error('blogs.excerpt')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keyword</label>
                                            <textarea wire:model="blogs.keyword" class="form-control @error('blogs.keyword') is-invalid @enderror"></textarea>

                                            @error('blogs.keyword')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select wire:model="blogs.status"
                                                class="form-control @error('blogs.status') is-invalid @enderror"
                                                name="" id="">
                                                <option value="Draft">Draft</option>
                                                <option value="Publish">Publish</option>
                                            </select>
                                            @error('blogs.status')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Publish</label>
                                            <input type="date"
                                                class="form-control @error('blogs.published_at') is-invalid @enderror"
                                                name="" id="" placeholder=""
                                                wire:model="blogs.published_at">
                                            @error('blogs.published_at')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" wire:ignore>
                                    <label for="">Konten</label>
                                    <textarea class="form-control tinyMCE @error('blogs.content') is-invalid @enderror" data-model="blogs.content"
                                        wire:model="blogs.content">{{ $blogs ? $blogs->content : '' }}</textarea>
                                    @error('blogs.content')
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
                                    <!-- <small id="fileHelpId" class="form-text text-muted">Help text</small> -->
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
                                    @elseif ($blogs->image)
                                        <div class="mt-2">
                                            <label for="currentImage">Current Image:</label>
                                            <img src="{{ Storage::disk('s3')->url($blogs->image) }}"
                                                alt="Current Image" class="img-thumbnail">
                                        </div>
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
    {{-- <script src="https://cdn.tiny.cloud/1/02ycb6jfsha69obgdavcwnfnm8bna9ez9cthzwha1gagrflu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script>
        tinymce.init({
            selector: 'textarea.tinyMCE', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table wordcount',
            toolbar: 'fullscreen code preview | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | image media link | wordcount',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Rama Trans',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('blogs.content', editor.getContent());
                });
            }
        });
    </script>
@endpush
