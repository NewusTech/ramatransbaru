<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Gambar Slider') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-carousel') }}">{{ __('Gambar Slider') }}</a>
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
                                            <label for="">Judul Atas</label>
                                            <input type="text"
                                                class="form-control @error('carousel.title_top') is-invalid @enderror"
                                                wire:model="carousel.title_top">
                                            <span>
                                                <small class="text-info"><strong>Boleh dikosongkan!</strong></small>
                                            </span>
                                            @error('carousel.title_top')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Judul Tengah</label>
                                            <input type="text"
                                                class="form-control @error('carousel.title') is-invalid @enderror"
                                                wire:model="carousel.title">
                                            <span>
                                                <small class="text-info"><strong>Boleh dikosongkan!</strong></small>
                                            </span>
                                            @error('carousel.title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Judul Bawah</label>
                                            <input type="text"
                                                class="form-control @error('carousel.title_bot') is-invalid @enderror"
                                                wire:model="carousel.title_bot">
                                            <span>
                                                <small class="text-info"><strong>Boleh dikosongkan!</strong></small>
                                            </span>
                                            @error('carousel.title_bot')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
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
                                    @if ($carousel->image)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($carousel->image) }}" alt=""
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
