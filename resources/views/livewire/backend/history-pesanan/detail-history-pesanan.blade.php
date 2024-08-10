<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Riwayat Pesanan') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Riwayat Pesanan') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('history-pesanan') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Nama</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->name !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Rute</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->rute !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">No. HP</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->telp !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Tanggal dan Waktu Pesanan</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->date !!} ( {!! $detailHistoryPesanan->time !!} )</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Jumlah Booking</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->numberorder !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Lokasi Jemput</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->location !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Dibuat tanggal</td>
                                            <td>
                                                <div>{!! $detailHistoryPesanan->created_at !!}</div>
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
