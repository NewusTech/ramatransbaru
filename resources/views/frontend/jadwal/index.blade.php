@extends('frontend.layouts.app-plesir')
@section('title', 'Rama Tranz Travel, Keberangkatan Setiap Hari')
@section('content')

    <div class="content-wrap page-jadwal">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>Jadwal</h1>
                    </div>
                </div>
            </div>
            <div class="container page">
                <section class="page-section mb-0 pt-0 pb-50">
                    {{-- <h2 class="title-section mt-0 mb-0"><span>Jadwal</span></h2> --}}
                    <div class="sm-table-box with-plus short-3 mb-20 mt-10">
                        <table class="table">
                            <thead class="thead-dark sm-thead">
                                <tr>
                                    <th scope="col">Asal</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($rute->count())
                                    @foreach ($rute as $item)
                                        <tr>
                                            <td> {{ $item->asal }} <a
                                                    href="{{ route('detail-jasa-transportasi.jasaId', $item->slug) }}"
                                                    class="sm-theme-button sm-hover" title="{{ $item->title }}">Lihat
                                                    &gt;</a></td>
                                            <td> {{ $item->tujuan }} <a
                                                    href="{{ route('detail-jasa-transportasi.jasaId', $item->slug) }}"
                                                    class="sm-theme-button sm-hover" title="{{ $item->title }}">Lihat
                                                    &gt;</a></td>
                                            <td>Rp. <?php echo number_format($item->price, 2, '.', ','); ?></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2"> No record found </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

        </div>
    </div>

@endsection
