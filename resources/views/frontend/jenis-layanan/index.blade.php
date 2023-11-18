@extends('frontend.layouts.app-plesir')
@section('title', 'Jenis Layanan')
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
            {{-- <div class="row">
        <div class="col-md-12">
          <div class="gallery-section">
            <div class="row-filter">
            </div>
            <div class="row-gallery">
              <div class="wrap-gallery">
                @foreach ($jenisLayanan as $item)
                  <div class="gall-col gallery-img-box" data-category-image="destination">
                      <a class="gallery-list" href="#!"><img alt="gallery" src="{{ Storage::url($item->media)}}"></a>
                      <h4>{{ $item->title }}</h4>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div> --}}

            <div class="album py-5 bg-light jenis-layanan">
                <div class="container">
                    <div class="row">
                        @foreach ($jenisLayanan as $item)
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6">
                                        <img class="card-img-top cover"
                                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                            alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                                            src="{{ Storage::disk('s3')->url($item->media) }}" data-holder-rendered="true">
                                    </a>
                                    <div class="card-body">
                                        <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6">
                                            <strong>{{ $item->title }}</strong>
                                        </a>
                                        {{-- <span class="center-button" style="color: #2450A6"><strong>{{ $item->title }}</strong></span> --}}
                                        {{-- <p class="card-text">{!!Str::words($item->content, 50, '...')!!}</p> --}}
                                        <div class="d-flex center-button align-items-center">
                                            <div class="btn-group">
                                                <a href="{{ route('layananCategoryId', $item->slug) }}"
                                                    class="theme-button">
                                                    Detail
                                                </a>
                                                {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button> --}}
                                            </div>
                                            {{-- <small class="text-muted">9 mins</small> --}}
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
