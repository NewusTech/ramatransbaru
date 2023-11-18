<div>

    <section class="section">

        <div class="section-header">

            <h1> {{  __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Broadcast') }}</div>
            </div>

        </div>

        <div class="section-body">

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Kirim notifikasi / pemberitahuan kepada pengguna</h6>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="save">
                                <div class="form-group">
                                    <label for="inputName">Judul <span class='text-danger'>*</span> </label>
                                    <input name="inputName" type="text" id="" wire:model="notification_title"
                                        class="form-control @error('notification_title') is-invalid @enderror">
                                    @error('notification_title')
                                    <span class='invalid-feedback'>
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Pesan <span class='text-danger'>*</span></label>
                                    <textarea name="" wire:model="message" style="min-height:100px" id=""
                                        class="form-control @error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                    <span class='invalid-feedback'>
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Link </label>
                                    <input name="inputName" type="text" id="" wire:model="url"
                                        class="form-control @error('url') is-invalid @enderror">
                                    @error('url')
                                    <span class='invalid-feedback'>
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group" wire:ignore>
                                    <label for="">Pilih pengguna <span class="text-info" style="font-size:10px">Jika
                                            dikosongkan, maka
                                            pesan akan dikirim ke semua pengguna tanpa terkecuali</span></label>
                                    <select name="" data-id="selectedUsers" id="" class="form-control select2" multiple>
                                        <option value=""></option>
                                        @foreach($users as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}
                                            <strong>{{  $u->job->job_title ? "( ".$u->job->job_title." )" : null }}</strong>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@push('styles')
<style>
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background: #12A2BD !important;
}

.select2-selection__choice__remove {
    color: white !important;
}

</style>
@endpush

@push('scripts')
<script>
$(".select2").select2();
$(".select2").on('change', function() {
    let data = $(this).val();
    let id = $(this).data('id');
    @this.set(id, data);
});
</script>
@endpush
