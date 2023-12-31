@extends('frontend.layouts.app-plesir')
@section('title', env('APP_NAME', 'Default Name') . ' memiliki banyak unit mobil yang terawat.')
@section('content')
    {{-- modal --}}
    <div id="gallery-modal">
        @foreach ($gallery as $item)
            <div class="modal fade" id="imageresource-{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {{-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div> --}}
                        <div class="modal-body" id="sm-section-modal-gallery">
                            <img src="{{ Storage::disk('s3')->url($item->image) }}" id="imagepreview"
                                style="width: 100%; height: 264px;">
                        </div>
                        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- end modal --}}
    <div class="content-wrap page-gallery">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>
                            Gallery
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-section">
                        <div class="row-filter">
                            <!-- filter -->
                            <div class="filter-gallery">
                                <button data-filter="gallery-show-all" class="filter-button active">All</button>
                                <button data-filter="exterior" value="Eksterior" class="filter-button">Exterior</button>
                                <button data-filter="interior" value="Interior" class="filter-button">Interior</button>
                            </div>
                            <!-- /filter -->
                        </div>
                        <div class="row-gallery">
                            <div class="wrap-gallery" id="list-gallery">
                                {{-- 1000x668 --}}
                                @foreach ($gallery as $photo)
                                    <div class="gall-col gallery-img-box">
                                        <a class="gallery-list" href="#"><img alt="gallery"
                                                id="imageresource-{{ $photo->id }}"
                                                src="{{ Storage::disk('s3')->url($photo->image) }}"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">
        $(".filter-button").on("click", function(e) {
            $(".filter-button").removeClass("active");
            $(this).addClass("active");
            var category = e.target.value
            var base_url = '{{ url('') }}'
            console.log("asem", category)
            $.get(base_url + '/filterGallery?category=' + category, function(data) {
                $('#list-gallery').empty();
                $.each(data, function(index, obj) {
                    console.log("tol", obj.image)
                    $('#list-gallery').append(
                        `
                                <div class="gall-col gallery-img-box" >
                                    <a class="gallery-list" href="#"><img alt="gallery" id="imageresource-{{ '`+obj.id+`' }}" src="{{ Storage::disk('s3')->url('`+obj.image+`') }}"></a>
                                </div>                               
                              `
                    );
                });
            })
        });

        $(".gallery-list").on("click", function(e) {
            $('#' + e.target.id).modal(
                'show'
            ); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });
    </script>

@endsection
