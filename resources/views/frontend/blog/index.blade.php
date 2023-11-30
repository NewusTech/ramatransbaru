@extends('frontend.layouts.app-plesir')
@section('title', 'Pilih Rama Tranz Travel Untuk Perjalanan Menyenangkan')
@section('content')

    <div class="content-wrap page-news-list" id="blog-list">
        <div class="subsite-banner">
            <img src="https://ramatranzlampung.com/storage/jenis-layanan/90hVpgV5oMu32B8TQNGxbpHiGxc8TYifaH24IkSY.jpg">
        </div>
        <div class="subsite subsite-with-banner">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>
                            Blog
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form search-content">
                        <div class="search-wrapper ">
                            <input id="search" placeholder="Search...">
                            {{-- <button class="ssubmit" type="submit" name="search_submit"><i
                                    class="fas fa-search"></i></button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @foreach ($blogs as $blog)
                    <div class="row news-row">
                        <div class="col-md-12">
                            <div class="news-card">
                                <div class="nc-top">
                                    <div class="nc-left">
                                        <div class="ncl-image">
                                            <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                                <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="nc-right">
                                        <div class="ncr-row-a">
                                            <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                                {{ $blog->title }}
                                            </a>
                                        </div>
                                        <div class="ncr-row-b">
                                            {{ Str::limit($blog->excerpt, 250, '...') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row car-row pagination-row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            <div id="pagination">
                                {{ $blogs->links() }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        {{-- <div id="search-results"></div> --}}
    </div>

@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle live search
            $('#search').on('keyup', function() {
                fetch_data();
            });

            // Handle pagination links
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            // Fetch data function
            function fetch_data(page = 1) {
                var query = $('#search').val();
                var baseUrl = "{!! url('/blog/search') !!}";

                $.ajax({
                    url: baseUrl,
                    type: 'GET',
                    data: {
                        page: page,
                        query: query
                    },
                    success: function(data) {
                        $('#blog-list').html(data);
                        document.title = "Rama Tranz Travel Terpercaya, Kunjungi Kami di Blog ke " +
                            page;
                    }
                });
            }
        });
    </script>
@endsection
