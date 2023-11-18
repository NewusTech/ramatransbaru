<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Kontak') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Kontak') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('data-kontak') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Alamat</td>
                                            <td>
                                                <div>{!! $detailKontak->alamat !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Latitude</td>
                                            <td>
                                                <div>{!! $detailKontak->lat !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Longitude</td>
                                            <td>
                                                <div>{!! $detailKontak->lng !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Email</td>
                                            <td>
                                                <div>{!! $detailKontak->email !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Telepon Travel 1</td>
                                            <td>
                                                <div>{!! $detailKontak->phone_tr_1 !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if($detailKontak->phone_tr_2!==null)
                                            <td style="font-weight: 700">Telepon Travel 2</td>
                                            <td>
                                                <div>{!! $detailKontak->phone_tr_2 !!}</div>
                                            </td>

                                            {{ null }}
                                            @endif
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Telepon Cargo 1</td>
                                            <td>
                                                <div>{!! $detailKontak->phone_cr_1 !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if($detailKontak->phone_cr_2!==null)
                                            <td style="font-weight: 700">Telepon Cargo 2</td>
                                            <td>
                                                <div>{!! $detailKontak->phone_cr_2 !!}</div>
                                            </td>

                                            {{ null }}
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($detailKontak->wa_1>0)
                                            <td style="font-weight: 700">WhatsApp 1</td>
                                            <td>
                                                <div>{!! $detailKontak->wa !!}</div>
                                            </td>

                                            {{ null }}
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($detailKontak->wa_2>0)
                                            <td style="font-weight: 700">WhatsApp 2</td>
                                            <td>
                                                <div>{!! $detailKontak->wa_2 !!}</div>
                                            </td>

                                            {{ null }}
                                            @endif
                                        </tr>

                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $detailKontak->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $detailKontak->updated_at !!}</div>
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