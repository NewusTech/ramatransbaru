<div>
    <section class="section">
        <div class="section-header">
            <h1> {{ __('Landing') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Landing') }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <!-- Main -->
                                <div class="tab-pane fade show active" id="main" role="tabpanel"
                                    aria-labelledby="main-tab">
                                    @livewire('backend.landing.published-pages-table')
                                </div>
                                <!-- End Main -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
@endpush
