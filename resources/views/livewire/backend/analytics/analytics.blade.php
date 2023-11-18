<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Google Analytics') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Google Analytics') }}</div>
            </div>

        </div>

        <div class="section-body">
            {{-- <div class="row">
                <div class="col-12">

                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills w-100" role="tablist">

                                <li class="nav-pill ml-auto">
                                    @can('users.create')
                                    <a class="nav-link active" href="{{ route('create-tag') }}" data-toggle="tooltip"
                                        title="{{ __('Add New') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    @endcan

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">

                                <!-- Main -->
                                <div class="tab-pane fade show active" id="main" role="tabpanel"
                                    aria-labelledby="main-tab">
                                    @livewire('backend.analytics.published-analytics')

                                </div>
                                <!-- End Main -->

                                <!-- Trash -->
                                {{-- <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                                    @livewire('user.table.trash-user-table')
                                </div> --}}
                                <!-- End Trash -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

@push('scripts')
<script>
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
</script>
@endpush