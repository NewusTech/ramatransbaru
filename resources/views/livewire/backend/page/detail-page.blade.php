<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Pages') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Pages') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('data-page') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Judul</td>
                                            <td>
                                                <div>{!! $pageDetail->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">slug</td>
                                            <td>
                                                <div>{!! $pageDetail->slug !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Meta Desc</td>
                                            <td>
                                                <div>{!! $pageDetail->meta_desc !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Seo Title</td>
                                            <td>
                                                <div>{!! $pageDetail->seo_title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Deskripsi Singkat</td>
                                            <td>
                                                <div>{!! $pageDetail->short_description !!}</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight: 700">Isi Konten</td>
                                            <td>
                                                <div>{!! $pageDetail->content !!}</div>
                                            </td>
                                        </tr>
                                        @if ($pageDetail->media !== null)
                                            <tr>
                                                <td style="font-weight: 700">Gambar</td>
                                                <td>
                                                    <div>
                                                        <img src="{{ Storage::disk('s3')->url($pageDetail->media) }}"
                                                            alt="" class="img-thumbnail" width="150">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $pageDetail->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $pageDetail->updated_at !!}</div>
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
