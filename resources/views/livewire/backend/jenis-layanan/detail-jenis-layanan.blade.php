<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Jenis Layanan') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Jenis Layanan') }}</div>
            </div>

        </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <ul class="nav nav-pills w-100 mb-4" role="tablist">
                                    <li class="nav-pill ml-auto">
                                        <a class="nav-link active btn-sm" href="{{ route('data-jenis-layanan') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Jenis Layanan</td>
                                            <td>
                                                <div>{!! $jenisLayanan->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">slug</td>
                                            <td>
                                                <div class="badge badge-primary">{!! $jenisLayanan->slug !!}</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight: 700">Isi Konten</td>
                                            <td>
                                                <div>{!! $jenisLayanan->content !!}</div>
                                            </td>
                                        </tr>

                                        @if ($jenisLayanan->media !== null)
                                            <tr>
                                                <td style="font-weight: 700">Gambar</td>
                                                <td>
                                                    <div>
                                                        <img src="{{ Storage::disk('s3')->url($jenisLayanan->media) }}"
                                                            alt="" class="img-thumbnail" width="150">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $jenisLayanan->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $jenisLayanan->updated_at !!}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
