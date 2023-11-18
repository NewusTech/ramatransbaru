<div>
    <section class="section">
        <div class="section-header">
            <h1> {{ __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('user') }}">User</a></div>
                <div class="breadcrumb-item">{{ __($title) }}</div>
                <div class="breadcrumb-item">{{ __($user->name) }}</div>
            </div>

        </div>

        <div class="section-body">
            <h2 class="section-title">{{ $user->name }}</h2>
            <p class="section-lead">
                Informasi Pengguna
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="rounded-circle mr-1 profile-widget-picture" width="100" height="100"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                            <img alt="image" src="{{ asset('img') }}/avatar/avatar-1.png"
                                class="rounded-circle mr-1 profile-widget-picture">
                            @endif
                            <!-- <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Posts</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Followers</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Following</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div> -->
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ $user->name }} <div
                                    class="text-muted d-inline font-weight-normal">
                                    {{-- <div class="slash"></div> {{ $user->job->job_title }} --}}
                                </div>
                            </div>
                            <small class="text-muted">Email</small>
                            <h6>{{ $user->email }}</h6>
                            <small class="text-muted pt-4 db">Diverifikasi pada tanggal</small>
                            <h6 style="font-size: 13px; margin-top:5px;">{{ $user->email_verified_at }}</h6>
                            {{-- <small class="text-muted pt-4 db">NIP</small>
                            <h6>{{ $user->NIP }}</h6> --}}

                        </div>

                    </div>
                </div>
                {{-- @if(auth()->user()->id == $user->id)
                <div class="col-12 col-md-12 col-lg-7" style="margin-top: 35px">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Show Notifications') }}</h4>
                            <div class="card-header-action">
                                <div class="dropdown dropleft">
                                    <button class="btn btn-default dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="javascript:void(0)"
                                            wire:click="hapus('terbaca')">Hapus terbaca</a>
                                        <a class="dropdown-item" href="javascript:void(0)"
                                            wire:click="hapus('all')">Hapus semua</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills" id="myTab3" role="tablist">
                                <li class="nav-item mr-1">
                                    <a class="nav-link active show" id="home-tab3" data-toggle="tab" href="#home3"
                                        role="tab" aria-controls="home" aria-selected="true">Baru</a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                        aria-controls="profile" aria-selected="false">Terbaca</a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                        aria-controls="contact" aria-selected="false">Semua</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade active show" id="home3" role="tabpanel"
                                    aria-labelledby="home-tab3">
                                    @forelse($user->unreadNotifications as $notif)
                                    <a href="{{ route('readnotif',$notif->id) ?? '#' }}" class="dropdown-item"
                                        style="white-space:normal">
                                        <div class="dropdown-item-desc">
                                            <div class="row">
                                                <div class="col-11">
                                                    <strong>{{ $notif->data['title'] }}</strong>
                                                    <br>
                                                    {{ $notif->data['message'] }}
                                                    <div class="time text-primary mt-1" style="font-size:10px">
                                                        {{ $notif->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                                <div class=" col-1 d-flex">
                                                    <i class="text-primary fas fa-dot-circle  m-auto   "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    @empty
                                    <span class="text-muted">
                                        Tidak ada notifikasi yang belum terbaca
                                    </span>
                                    @endforelse
                                </div>
                                <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                    @forelse($user->readNotifications as $notif)
                                    <a href="{{ route('readnotif',$notif->id) ?? '#' }}"
                                        class="dropdown-item dropdown-item-unread" style="white-space:normal">
                                        <div class="dropdown-item-desc">
                                            <div class="row">
                                                <div class="col-11">
                                                    <strong>{{ $notif->data['title'] }}</strong>
                                                    <br>
                                                    {{ $notif->data['message'] }}
                                                    <div class="time text-primary mt-1" style="font-size:10px">
                                                        {{ $notif->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    @empty
                                    <span class="text-muted">
                                        Tidak ada notifikasi terbaca
                                    </span>
                                    @endforelse
                                </div>
                                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                    @forelse($user->notifications as $notif)
                                    <a href="{{ route('readnotif',$notif->id) ?? '#' }}"
                                        class="dropdown-item dropdown-item-unread" style="white-space:normal">
                                        <div class="dropdown-item-desc">
                                            <div class="row">
                                                <div class="col-11">
                                                    <strong>{{ $notif->data['title'] }}</strong>
                                                    <br>
                                                    {{ $notif->data['message'] }}
                                                    <div class="time text-primary" style="font-size:10px">
                                                        {{ $notif->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                                @if($notif->read_at === NULL)
                                                <div class=" col-1">
                                                    <i class="text-primary fas fa-dot-circle    "></i>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </a>

                                    @empty
                                    <span class="text-muted">
                                        Tidak ada notifikasi terbaca
                                    </span>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif --}}
            </div>
        </div>
    </section>



</div>

@push('scripts')

<script>

</script>
@endpush