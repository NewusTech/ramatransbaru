<div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab1">

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <div class="card" id="settings-card">
            <div class="card-header">
                <h4>{{ __('General Settings') }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for=""> {{ __('Nama Aplikasi') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="name"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""> {{ __('Nama Perusahaan') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="company"
                        class="form-control @error('company') is-invalid @enderror">
                    @error('company')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""> {{ __('Alamat Perusahaan') }} <span class='text-info'
                            style='font-size:10px'>(Optional)</span></label>
                    <input type="text" class="form-control" wire:model="address"
                        class="form-control @error('address') is-invalid @enderror">
                    @error('address')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""> {{ __('Telepon') }} <span class='text-info'
                            style='font-size:10px'>(Optional)</span></label>
                    <input type="text" class="form-control" wire:model="phone"
                        class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""> {{ __('Email') }} <span class='text-info'
                            style='font-size:10px'>(Optional)</span></label>
                    <input type="text" class="form-control" wire:model="email"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label>{{ __('Site Logo') }}<span class='text-info' style='font-size:10px'>(Optional)</span></label>
                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <div class="custom-file">
                            <input type="file" wire:model="logo"
                                class="custom-file-input  @error('logo') is-invalid @enderror">
                            <label class="custom-file-label">{{ __('Choose File') }}</label>
                        </div>
                        <div class="form-text text-muted">{{ __('The image must have a maximum size of 1MB') }}
                        </div>

                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress><br>
                            wait until your uploaded image is shown before saving it!
                        </div>

                        <!-- <div wire:loading.delay wire:target="logo">Uploading...</div><br> -->
                        @error('logo')
                        <span class="text-danger" style="font-size:12px">{{ $message }}</span>
                        @enderror

                        @if(!$current && !$logo)

                        @elseif($logo && is_string($logo))
                        Logo Preview: <br>
                        <img src="{{ asset('storage/'.$logo)  }}" class="img-thumbnail" style="max-width:200px">
                        @elseif($logo && is_object($logo))
                        Logo Preview: <br>
                        <img src="{{ $logo->temporaryUrl()  }}" class="img-thumbnail" style="max-width:200px">
                        @endif


                    </div>
                </div>
            </div>

            <div class="card-footer bg-whitesmoke text-md-right">
                <button class="btn btn-primary" id="save-btn" wire:loading.remove>{{ __('Save Changes') }}</button>

                <button class="btn btn-secondary" type="button">Reset</button>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var name = this.files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = name
})
</script>
@endpush
