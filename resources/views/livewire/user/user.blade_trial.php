<div>

    <section class="section">

        <div class="section-header">

            <h1> {{  __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Users') }}</div>
            </div>

        </div>

        <div class="section-body">
            <div class="row mb-3">
                <div class="col-12">

                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills w-100" role="tablist">
                                <li class="nav-item mr-1">
                                    <a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab"
                                        aria-controls="main" aria-selected="true">{{ __('All') }} <span
                                            class="badge badge-white">{{ $users }}
                                        </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trash-tab" data-toggle="tab" href="#trash" role="tab"
                                        aria-controls="trash" aria-selected="false">{{ __('Trash') }} <span
                                            class="badge badge-primary">{{ $trash }}</span></a>
                                </li>
                                <li class="nav-pill ml-auto">
                                    <a class="btn btn-outline-primary mr-1" style="line-height:32px" href="#"
                                        wire:click="export()" data-toggle="tooltip" title="{{ __('Export') }}"><i
                                            class="fa fa-file-excel" aria-hidden="true"></i>
                                        Export</a>
                                </li>
                                <li class="nav-pill">
                                    <a class="btn btn-outline-primary mr-1" style="line-height:32px" href="#"
                                        data-toggle="modal" data-target="#uploadExcel"><i
                                            class="fas fa-file-import    "></i>
                                        Import</a>
                                </li>
                                <li class="nav-pill ">
                                    @can('users.create')
                                    <a class="nav-link active" href="#" data-toggle="collapse"
                                        data-target="#formCollapse" title="{{ __('Add New') }}"><i class="fa fa-plus"
                                            aria-hidden="true"></i></a>
                                    @endcan

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 collapse" id="formCollapse" wire:ignore.self>
                <div class="col-12">
                    <div class="card mb-o">
                        <div class="card-body">
                            <form wire:submit.prevent="save">
                                <div class="form-group">
                                    <label for="name">NIP <span class='text-danger'>*</span></label>
                                    <input wire:model.defer="NIP" name="NIP" type="text" id=""
                                        class="form-control @error('NIP') is-invalid @enderror">
                                    @error('NIP')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Fullname') }} <span class='text-danger'>*</span></label>
                                    <input type="hidden" value="" wire:model.defer="selectedItem">
                                    <input wire:model.defer="name" autofocus="" name="name" type="text" id=""
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Email <span class='text-danger'>*</span></label>
                                    <input wire:model.defer="email" name="email" type="text" id=""
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Whatsapp </label>
                                    <input wire:model.defer="wa" name="wa" type="text" id=""
                                        class="form-control @error('wa') is-invalid @enderror">
                                    @error('wa')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="unit">Unit Induk <span class="text-danger">*</span></label>
                                    <select name="unit" wire:model="unit" id="unit"
                                        class="form-control @error('unit') is-invalid @enderror">
                                        <option value=""> -- {{__('Pilih Unit') }} --</option>
                                        @foreach($role_groups as $g)
                                        <option value="{{ $g->id }}">{{ $g->group }}</option>
                                        @endforeach
                                    </select>
                                    @error('unit')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="job">PIC TNA <span class="text-danger">*</span></label>
                                    <select name="job" wire:model="job" id="job" data-live-search="true"
                                        class="form-control @error('job') is-invalid @enderror">
                                        <option value=""> -- {{__('Pilih PIC TNA') }} --</option>
                                        @foreach($roles as $role)
                                        <optgroup label=" {{ $role->name }}">
                                            @foreach($role->jobs as $job)
                                            <option value="{{ $job->id }}">{{ $job->job_title }}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                    @error('job')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="row ">
                                    <div class="col-12 p-4 rounded text-white bg-primary text-center">

                                        Secara default, sistem akan men-generate NIP sebagai password dan email berisi
                                        informasi
                                        login akan dikirimkan kepada pengguna.
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">

                                <!-- Main -->
                                <div class="tab-pane fade show active" id="main" role="tabpanel"
                                    aria-labelledby="main-tab">
                                    @livewire('user.table.active-user-table')

                                </div>
                                <!-- End Main -->

                                <!-- Trash -->
                                <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                                    @livewire('user.table.trash-user-table')
                                </div>
                                <!-- End Trash -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __($title) }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="name">NIP <span class='text-danger'>*</span></label>
                            <input wire:model.defer="NIP" name="NIP" type="text" id=""
                                class="form-control @error('NIP') is-invalid @enderror">
                            @error('NIP')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Fullname') }} <span class='text-danger'>*</span></label>
                            <input type="hidden" value="" wire:model.defer="selectedItem">
                            <input wire:model.defer="name" autofocus="" name="name" type="text" id=""
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Email <span class='text-danger'>*</span></label>
                            <input wire:model.defer="email" name="email" type="text" id=""
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Whatsapp </label>
                            <input wire:model.defer="wa" name="wa" type="text" id=""
                                class="form-control @error('wa') is-invalid @enderror">
                            @error('wa')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="unit">Unit Induk <span class="text-danger">*</span></label>
                            <select name="unit" wire:model="unit" id="unit"
                                class="form-control @error('unit') is-invalid @enderror">
                                <option value=""> -- {{__('Pilih Unit') }} --</option>
                                @foreach($role_groups as $g)
                                <option value="{{ $g->id }}">{{ $g->group }}</option>
                                @endforeach
                            </select>
                            @error('unit')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="job">PIC TNA <span class="text-danger">*</span></label>
                            <select name="job" wire:model="job" id="job" data-live-search="true"
                                class="form-control @error('job') is-invalid @enderror">
                                <option value=""> -- {{__('Pilih PIC TNA') }} --</option>
                                @foreach($roles as $role)
                                <optgroup label=" {{ $role->name }}">
                                    @foreach($role->jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->job_title }}</option>
                                    @endforeach
                                </optgroup>
                                @endforeach
                            </select>
                            @error('job')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row ">
                            <div class="col-12 p-4 rounded text-white bg-primary text-center">

                                Secara default, sistem akan men-generate NIP sebagai password dan email berisi informasi
                                login akan dikirimkan kepada pengguna.
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:keydown.enter="save" wire:loading.attr="disabled" wire:click="save"
                        class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="uploadExcel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Impor Pengguna dari Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="import" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="modal-body">
                        <div class="custom-file">

                            <div x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                <input type="file" name="excel" wire:model="excel"
                                    class="custom-file-input mb-2 @error('excel') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">{{ __('Choose file') }}</label>
                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @if($excel)
                            <span class="text-info">Berkas {{ $excel->getClientOriginalName()}} telah siap</span>
                            @endif
                            @error('excel')
                            <span class='invalid-feedback'>
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
$("body").on('click', ".btnAction", function() {
    let id = $(this).data('id');
    let action = $(this).data('action');
    let mode = $(this).data('mode');
    let force = $(this).data('force');

    if (mode) {
        window.livewire.emit(action, mode, id);
    } else if (force) {
        window.livewire.emit(action, id, false, true);
    } else {
        window.livewire.emit(action, id);
    }
});
// Livewire.restart();
// $('.selectpicker').selectpicker();
window.addEventListener('unit', function(event) {
    $('.job').selectpicker();
});

window.addEventListener('openform', function(event) {
    $('#' + event.detail.modal).collapse('show');
})

$("#unit").on('change', function() {
    // alert($(this).val());
    $('#job').selectpicker();

})
</script>
@endpush
