@extends('frontend.layouts.app-plesir')
@section('title', env('APP_NAME', 'Default Name') . ' Jenis Layanan')
@section('content')
    <div class="content-wrap page-gallery">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="subsite-heading">
                        Jenis Layanan
                    </div>
                </div>
            </div>
            <div class="album py-5 bg-light jenis-layanan">
                <div class="container">
                    <div class="row">
                        @foreach ($jenisLayanan as $item)
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm position-relative">
                                    <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6;">
                                        <img class="p-1" src="{{ Storage::disk('s3')->url($item->media) }}"
                                            alt="{{ $item->title }}" style="height: 180px; width: 100%; display: block;">
                                    </a>
                                    <div class="overlay-text position-absolute text-left ml-1 mt-1 w-100 text-white">
                                        <div class="d-flex justify-content-between align-items-center h-100 pr-2">
                                            <div style="background-color: rgba(0, 123, 255, 0.7); color: #ffffff;"
                                                class="p-2 rounded w-50">
                                                <a href="{{ route('layananCategoryId', $item->slug) }}"
                                                    style="color: #ffffff; text-decoration: none;">
                                                    <strong>{{ $item->title }}</strong>
                                                </a>
                                            </div>
                                            <div style="background-color: rgba(0, 123, 255, 0.7); color: #ffffff;"
                                                class="py-2 px-1 rounded w-24">
                                                <div class="stars stars-5"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-body pt-2">
                                        <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6">
                                            {{ Str::limit($item->excerpt, 25, '...') }}
                                        </a>
                                        <div class="d-flex center-button align-items-center mt-1">
                                            <div class="btn-group">
                                                <a href="{{ route('layananCategoryId', $item->slug) }}"
                                                    class="theme-button">
                                                    Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript"></script>

@endsection
