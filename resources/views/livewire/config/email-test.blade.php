<div>
    <hr>
    <div class="form-group row align-items-center">
        <label for="site-title" class="form-control-label col-sm-3 text-md-right">{{ __('To') }}
            <span class="text-danger">*</span></label>
        <div class="col-sm-6 col-md-9">
            <input type="text" wire:model="to" class="form-control @error('to') is-invalid @enderror">
            @error('to')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row align-items-center">
        <label for="site-title" class="form-control-label col-sm-3 text-md-right">{{ __('Subject') }}
            <span class="text-danger">*</span></label>
        <div class="col-sm-6 col-md-9">
            <input type="text" wire:model="subject" class="form-control @error('subject') is-invalid @enderror">
            @error('subject')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row align-items-center">
        <label for="site-title" class="form-control-label col-sm-3 text-md-right">{{ __('Message') }}
            <span class="text-danger">*</span></label>
        <div class="col-sm-6 col-md-9">
            <input type="text" wire:model="themessage"
                class="form-control @error('themessage') summernote is-invalid @enderror">
            @error('themessage')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row align-items-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 col-md-9">

            <button class="btn btn-dark" wire:click="send">Send <i class="fa fa-paper-plan"></i></button>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(".summernote").summernote();
</script>
@endpush
