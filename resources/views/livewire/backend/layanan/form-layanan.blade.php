<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Rute') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-layanan') }}">{{ __('Rute') }}</a></div>
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
                                                class="form-control @error('layanan.title') is-invalid @enderror"
                                                wire:model="layanan.title">
                                            @error('layanan.title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Slug</label>
                                            <input type="text"
                                                class="form-control @error('layanan.slug') is-invalid @enderror"
                                                wire:model="layanan.slug">
                                            @error('layanan.slug')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Jasa Layanan</label>
                                            <select wire:model="layanan.jenis_layanan_id"
                                                class="form-control @error('layanan.jenis_layanan_id') is-invalid @enderror"
                                                name="" id="">
                                                <option>-- Pilih Jenis Jasa
                                                    Layanan --
                                                </option>

                                                @foreach ($kategori as $kategori)
                                                    <option value="{{ $kategori->id }}">
                                                        {{ $kategori->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('layanan.jenis_layanan_id')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Asal Kota</label>
                                            <input type="text"
                                                class="form-control @error('layanan.asal') is-invalid @enderror"
                                                wire:model="layanan.asal">
                                            @error('layanan.asal')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tujuan Kota</label>
                                            <input type="text"
                                                class="form-control @error('layanan.tujuan') is-invalid @enderror"
                                                wire:model="layanan.tujuan">
                                            @error('layanan.tujuan')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nomor WhatsApp</label>
                                            <input type="number"
                                                class="form-control @error('layanan.wa') is-invalid @enderror"
                                                wire:model="layanan.wa">
                                            @error('layanan.wa')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga</label>
                                            <input type="number"
                                                class="form-control @error('layanan.price') is-invalid @enderror"
                                                wire:model="layanan.price">
                                            @error('layanan.price')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Carter <br><small class="text-danger"><strong>
                                                        Boleh
                                                        dikosongkan jika jenis layanan bukan Jasa
                                                        Carter</strong></small></label><br>
                                            <small class="text-info"><strong>Di isi khusus untuk layanan jasa
                                                    carter</strong></small>
                                            <input type="text" class="form-control" placeholder="contoh: dalam kota"
                                                wire:model="layanan.jenis_carter">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Bisa Nego?</label>
                                            <select wire:model="layanan.isNegotiatable"
                                                class="form-control @error('layanan.isNegotiatable') is-invalid @enderror"
                                                name="" id="">
                                                <option value="1">Tidak Bisa Nego</option>
                                                <option value="2">Bisa Nego</option>
                                            </select>
                                            @error('layanan.isNegotiatable')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div wire:ignore class="form-group">
                                            <label for="">Tag Fasilitas</label>
                                            <select class="form-control" name="tag_fasilitas[]" multiple
                                                data-placeholder="--- Pilih Fasilitas ---" data-allow-clear="1"
                                                id="multiple-select">
                                                @foreach ($kategoriLayanan as $key => $tag)
                                                    <option value="{{ $tag->id }}"
                                                        {{ in_array($tag->id, $layanan->fasilitas->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                        {{ $tag->nama_fasilitas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Singkat</label>
                                            <textarea wire:model="layanan.intro" class="form-control @error('layanan.intro') is-invalid @enderror"></textarea>

                                            @error('layanan.intro')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" wire:ignore>
                                    <label for="">Isi Konten</label>
                                    <textarea class="form-control tinyMCE @error('layanan.content') is-invalid @enderror" data-model="layanan.content"
                                        wire:model="layanan.content">{{ $layanan ? $layanan->content : '' }}</textarea>
                                    @error('layanan.content')
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
                                    @elseif ($layanan->image)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($layanan->image) }}"
                                            alt="Current Image" class="img-thumbnail">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Jam Pagi</label>
                                    <input type="text"
                                        class="form-control @error('layanan.jam_pagi') is-invalid @enderror"
                                        wire:model="layanan.jam_pagi">
                                    @error('layanan.jam_pagi')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jam Siang</label>
                                    <input type="text"
                                        class="form-control @error('layanan.jam_siang') is-invalid @enderror"
                                        wire:model="layanan.jam_siang">
                                    @error('layanan.jam_siang')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jam Sore</label>
                                    <input type="text"
                                        class="form-control @error('layanan.jam_sore') is-invalid @enderror"
                                        wire:model="layanan.jam_sore">
                                    @error('layanan.jam_sore')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jam Malam</label>
                                    <input type="text"
                                        class="form-control @error('layanan.jam_malam') is-invalid @enderror"
                                        wire:model="layanan.jam_malam">
                                    @error('layanan.jam_malam')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group" wire:ignore>
                                    <label for="">Rute Berangkat</label>
                                    <textarea name="" id="rute_berangkat"
                                        class="form-control @error('layanan.rute_berangkat') is-invalid @enderror" data-model="layanan.rute_berangkat"
                                        wire:model="layanan.rute_berangkat">{{ $layanan ? $layanan->rute_berangkat : '' }}</textarea>
                                    @error('layanan.rute_berangkat')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
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
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        //select fasilitas
        $(document).ready(function() {
            $('#multiple-select').select2({
                allowClear: false
            });
            $('#multiple-select').on('change', function(e) {
                let elementName = $(this).attr('id');
                var data = $(this).select2("val");
                @this.set('tags', data);
            });
        });
    </script>

    <script src="https://cdn.tiny.cloud/1/02ycb6jfsha69obgdavcwnfnm8bna9ez9cthzwha1gagrflu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tinyMCE', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table wordcount',
            toolbar: 'fullscreen code preview | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | image media link | wordcount',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('layanan.content', editor.getContent());
                });
            }
        });
    </script>

    <script>
        tinymce.init({
            selector: 'textarea#rute_berangkat', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table wordcount',
            toolbar: 'fullscreen code preview | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | image media link | wordcount',
            forced_root_block: false,
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('layanan.rute_berangkat', editor.getContent());
                });
            }
        });
    </script>
@endpush
