<div wire:ignore.self class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab1">

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <div class="card" id="settings-card">
            <div class="card-header">
                <h4>{{ __('SMTP Settings') }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for=""> {{ __('Driver') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="driver"
                        class="form-control @error('driver') is-invalid @enderror">
                    @error('driver')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> {{ __('Host') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="host"
                        class="form-control @error('host') is-invalid @enderror">
                    @error('host')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> {{ __('Port') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="port"
                        class="form-control @error('port') is-invalid @enderror">
                    @error('port')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> {{ __('Encryption') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="encryption"
                        class="form-control @error('encryption') is-invalid @enderror">
                    @error('encryption')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> {{ __('Username') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="username"
                        class="form-control @error('username') is-invalid @enderror">
                    @error('username')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">{{ __('Password') }}
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" id="password" wire:model="password"
                            class="form-control @error('password') is-invalid @enderror">
                        <div class="input-group-append "><span class="input-group-text btn btn-dark"
                                id="showPassword"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> {{ __('Sender Name') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="sender_name"
                        class="form-control @error('sender_name') is-invalid @enderror">
                    @error('sender_name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""> {{ __('Sender Email') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="sender_email"
                        class="form-control @error('sender_email') is-invalid @enderror">
                    @error('sender_email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Send Test Email To</label>
                    <div class="input-group">
                        <input type="text" name="" wire:model="to" value="" class="form-control"
                            placeholder="example@domain.com">
                        <div class="input-group-append "><span class="input-group-text btn btn-dark"
                                wire:loading.attr="disabled" wire:click="send"><i class="fa fa-paper-plane"></i>

                            </span></div>
                    </div>
                    <span class="text-success" style="font-size:10px">{{ $emailTest }}</span>
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
$("#showPassword").on('click', function() {
    let state = $("#password").attr('type');
    if (state === 'password') {
        $("#password").attr('type', 'text');
        $("#showPassword").html("<i class='fa fa-eye-slash' aria-hidden='true'></i>")
    } else {
        $("#showPassword").html("<i class='fas fa-eye'></i>")
        $("#password").attr('type', 'password');
    }
})
</script>
@endpush
