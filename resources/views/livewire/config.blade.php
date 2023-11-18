<div>
    <section class="section">
        <div class="section-header">

            <h1>{{ __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('config') }} ">Config</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">{{ __('Your site settings') }}</h2>
            <p class="section-lead">
                {{ __('this is where you can configure your app')}}
            </p>

            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif

            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Choose Setting') }}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column" role="tablist">
                                <li class="nav-item mb-2"><a class="nav-link active show" id="general-tab1"
                                        data-toggle="tab" href="#general" role="tab" aria-controls="general"
                                        aria-selected="true">{{ __('General') }}</a>
                                </li>
                                <li class="nav-item mb-2"><a class="nav-link" id="smtp-tab1" data-toggle="tab"
                                        href="#smtp" role="tab" aria-controls="smtp"
                                        aria-selected="true">{{ __('SMTP') }}</a>
                                </li>

                                <!--<li class="nav-item mb-2">
                                    <a class="nav-link" id="integration-tab" data-toggle="tab" href="#integration"
                                        role="tab" aria-controls="integration" aria-selected="false">Integration</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 tab-content no-padding">
                    @livewire('config.config-general')
                    @livewire('config.config-smtp')
                </div>
            </div>

        </div>
    </section>
</div>
