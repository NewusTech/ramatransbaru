<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Rute') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Rute') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('data-layanan') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Rute</td>
                                            <td>
                                                <div>{!! $layananDetail->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">slug</td>
                                            <td>
                                                <div class="badge badge-primary">{!! $layananDetail->slug !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Jenis Jasa Layanan</td>
                                            <td>
                                                <div>{!! $layananDetail->jenisLayanan->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Asal Kota</td>
                                            <td>
                                                <div>{!! $layananDetail->asal !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Tujuan Kota</td>
                                            <td>
                                                <div>{!! $layananDetail->tujuan !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if ($layananDetail->jenis_carter !== null)
                                                <td style="font-weight: 700">Jenis Carter</td>
                                                <td>
                                                    <div>{!! $layananDetail->jenis_carter !!}</div>
                                                </td>
                                            @else
                                                {{ null }}
                                            @endif

                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Harga</td>
                                            <td>
                                                <div>{!! $layananDetail->price !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if ($layananDetail->isNegotiatable === 1)
                                                <td style="font-weight: 700">Harga Bisa Nego?</td>
                                                <td>
                                                    <div>Tidak Nego</div>
                                                </td>
                                            @else
                                                <td>
                                                    <div>Bisa Nego</div>
                                                </td>
                                            @endif

                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Deskripsi Singkat</td>
                                            <td>
                                                <div>{!! $layananDetail->intro !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Isi Konten</td>
                                            <td>
                                                <div>{!! $layananDetail->content !!}</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight: 700">Gambar</td>
                                            <td>
                                                <div>
                                                    <img src="{{ Storage::disk('s3')->url($layananDetail->image) }}"
                                                        alt="" class="img-thumbnail" width="150">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight: 700">Jadwal Berangkat</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Jam Pagi</td>
                                            <td>
                                                <div>{!! $layananDetail->jam_pagi !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Jam Siang</td>
                                            <td>
                                                <div>{!! $layananDetail->jam_siang !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Jam Sore</td>
                                            <td>
                                                <div>{!! $layananDetail->jam_sore !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Jam Malam</td>
                                            <td>
                                                <div>{!! $layananDetail->jam_malam !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Rute Berangkat</td>
                                            <td>
                                                <div>{!! $layananDetail->rute_berangkat !!}</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $layananDetail->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $layananDetail->updated_at !!}</div>
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
