@extends('frontend.layouts.app-plesir')
@section('title', env('APP_NAME', 'Default Name') . ', Keberangkatan Setiap Hari')
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

            @php
                $groupedData = $rute1->groupBy('asal');
                $cardsPerRow = 3;
            @endphp

            @foreach ($groupedData as $asal => $items)
                @php
                    $itemsChunks = $items->chunk($cardsPerRow);
                @endphp

                @foreach ($itemsChunks as $chunk)
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <p style="font-size: 16px; font-weight: 500">Dari {{ $asal }}</p>
                        </div>
                        @foreach ($chunk as $item)
                            <div class="col-md-4">
                                <div class="card mx-2 mb-2">
                                    <img src="{{ Storage::disk('s3')->url($item->image) }}" class="card-img-top"
                                        alt="...">
                                    <div class="overlay-text position-absolute text-left w-100 text-white">
                                        <div class="d-flex justify-content-between align-items-center h-100 pr-2">
                                            <div style="background-color: #00cc00; color: #ffffff;"
                                                class="p-2 rounded w-70">
                                                <strong>{{ $item->jenisLayanan->title }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="card-title" style="font-size: 14px">{{ $item->asal }} -
                                                    {{ $item->tujuan }}
                                                </p>

                                                <p class="card-text" style="color: #00cc00">Rp.
                                                    {{ number_format($item->price, 2, '.', ',') }}</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="{{ route('detail-jasa-transportasi.jasaId', $item->slug) }}"
                                                    title="{{ $item->title }}" class="btn btn-primary px-2 py-1">
                                                    <p class="p-0 m-0" style="font-size: 12px;">Lihat</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endforeach

        </div>
    </div>

@endsection
