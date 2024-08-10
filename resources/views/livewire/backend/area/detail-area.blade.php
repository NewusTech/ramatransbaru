<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Area') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Area') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('data-area') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Nama Provinsi</td>
                                            <td>
                                                <div>{!! $areaDetail->parents->nama_provinsi !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Kota/Kabupaten</td>
                                            <td>
                                                <div>{!! $areaDetail->kota_kab !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Alamat</td>
                                            <td>
                                                <div>{!! $areaDetail->alamat !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Latitude</td>
                                            <td>
                                                <div>{!! $areaDetail->lat !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Longitude</td>
                                            <td>
                                                <div>{!! $areaDetail->lng !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if ($areaDetail->isHQ !==null)
                                            <td style="font-weight: 700">Nama Kantor</td>
                                            <td>
                                                <div>{!! $areaDetail->isHQ !!}</div>
                                            </td>
                                            @else
                                            {{null}}
                                            @endif
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Nama Pengguna</td>
                                            <td>
                                                <div>{!! $areaDetail->nama_phone !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Telepon 1</td>
                                            <td>
                                                <div>{!! $areaDetail->phone_1 !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if ($areaDetail->phone_2 !==null)
                                            <td style="font-weight: 700">Telepon 1</td>
                                            <td>
                                                <div>{!! $areaDetail->phone_2 !!}</div>
                                            </td>
                                            @else
                                            {{null}}
                                            @endif
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $areaDetail->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $areaDetail->updated_at !!}</div>
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