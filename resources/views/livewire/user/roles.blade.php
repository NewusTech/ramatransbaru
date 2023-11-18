<div>

    <section class="section">
        <div class="section-header">
            <h1> {{ __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Roles & Permissions') }}</div>
            </div>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills w-100" role="tablist">
                                <li class="nav-item mr-1">
                                    <a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab"
                                        aria-controls="main" aria-selected="true">{{ __('All') }} <span
                                            class="badge badge-white">{{ $roles }}
                                        </span></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="trash-tab" data-toggle="tab" href="#trash" role="tab"
                                        aria-controls="trash" aria-selected="false">{{ __('Trash') }} <span
                                            class="badge badge-primary">{{ $trash }}</span></a>
                                </li> -->
                                <!-- <li class="nav-pill ml-auto">
                                    @can('roles.create')
                                    <a class="nav-link active" href="#" wire:click="open('add')" data-toggle="tooltip"
                                        title="{{ __('Add New') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    @endcan
                                </li> -->
                            </ul>



                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">

                                <!-- Main -->
                                <div class="tab-pane fade show active" id="main" role="tabpanel"
                                    aria-labelledby="main-tab">
                                    @livewire('user.table.roles-table')

                                </div>
                                <!-- End Main -->

                                <!-- Trash -->
                                <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                                    @livewire('user.table.trashed-roles-table')

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
                            <label for="name">{{ __('Role') }}</label>
                            <input wire:model="name" autofocus='' name="name" type="text" id=""
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:keydown.enter="save" wire:click="save"
                        class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="permissionsModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Setting the Permissions for ') }} {{ $name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($actions as $key=>$act)
                    <div class="col-12 mb-3">
                        <h6>{{ ucwords($act['display'] ?? null)}}</h6>
                        @foreach($act['collections'] as $k=>$a)
                        <div class="custom-control custom-checkbox">
                            <input wire:click="multiple" wire:model="selectedItems" type="checkbox"
                                value="{{$key}}.{{$k}}" class="custom-control-input" id="select{{$key}}.{{$k}}">
                            <label class="custom-control-label" for="select{{$key}}.{{$k}}">{{ $a }}</label>
                        </div>

                        @endforeach
                    </div>
                    @endforeach

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" wire:click="updatePermission"
                        class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>


</div>

@push('scripts')

<script>
$("body").on('click', ".btnAction", function() {
    var id = $(this).data('id');
    var action = $(this).data('action');
    var mode = $(this).data('mode');
    var force = $(this).data('force');

    if (mode) {
        window.livewire.emit(action, mode, id);
    } else if (force) {
        window.livewire.emit(action, id, false, true);
    } else {
        window.livewire.emit(action, id);
    }
});
</script>
@endpush
