@extends('frontend.layouts.app-plesir')
@section('title', 'Blog')
@section('content')

    <div class="content-wrap page-news-list">
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
            <div id="blog-list">
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
            </div>

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
        <div id="search-results"></div>
    </div>

@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        var searchInput = document.getElementById('search');
        var blogList = document.getElementById('blog-list');
        var searchResults = document.getElementById('search-results');

        searchInput.addEventListener('input', function() {
            var query = searchInput.value;
            performLiveSearch(query);
        });

        function performLiveSearch(query) {

            $.ajax({
                type: 'get',
                url: '{{ URL::to('searchblog') }}',
                data: {
                    'query': query
                },
                success: function(data) {
                    console.log(data);

                    // Hapus konten yang ada di dalam blogList
                    blogList.innerHTML = '';
                    pagination.innerHTML = '';

                    console.log(data.data)

                    if (data.data.length > 0) {
                        // Hasil pencarian ditemukan, tampilkan dalam blogList
                        for (var i = 0; i < data.data.length; i++) {
                            var result = data.data[i];

                            // Buat elemen HTML untuk hasil pencarian
                            var resultHtml = `
                              <div class="row news-row">
                                  <div class="col-md-12">
                                      <div class="news-card">
                                          <div class="nc-top">
                                              <div class="nc-left">
                                                  <div class="ncl-image">
                                                      <a href="{{ route('detail-blog.blogId', 'REPLACE_WITH_SLUG') }}" style="color: #2450A6">   
                                                        <img src="{{ Storage::disk('s3')->url('${result.image}') }}" alt="Image">                                         
                                                      </a>                                                      
                                                  </div>
                                              </div>
                                              <div class="nc-right">
                                                  <div class="ncr-row-a">
                                                      <a href="{{ route('detail-blog.blogId', 'REPLACE_WITH_SLUG') }}" style="color: #2450A6">
                                                          ${result.title}
                                                      </a>
                                                  </div>
                                                  <div class="ncr-row-b">
                                                      ${result.excerpt.substring(0, 250)}...
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          `;

                            // Ganti REPLACE_WITH_SLUG dengan result.slug
                            resultHtml = resultHtml.replace(/REPLACE_WITH_SLUG/g, result.slug);
                            // Ganti REPLACE_WITH_IMAGE_PATH dengan Storage::disk('s3')->url(result.image)
                            resultHtml = resultHtml.replace(/REPLACE_WITH_IMAGE_PATH/g,
                                "{{ Storage::disk('s3')->url('" + result.image + "') }}");

                            // Tambahkan hasil pencarian ke dalam blogList
                            blogList.innerHTML += resultHtml;
                        }
                        var paginationContainer = document.getElementById('pagination');
                        paginationContainer.innerHTML =
                            ''; // Hapus konten paginasi sebelum menambahkan yang baru

                        // Loop melalui tautan halaman dan buat elemen-elemen <a> untuk paginasi
                        for (var i = 1; i <= data.last_page; i++) {
                            var pageLink = document.createElement('a');
                            pageLink.href = '{{ URL::current() }}' + '?page=' + i;
                            pageLink.innerHTML = i;
                            if (i === data.current_page) {
                                pageLink.className = 'active'; // Tambahkan kelas 'active' ke halaman saat ini
                            }
                            paginationContainer.appendChild(pageLink);
                        }
                    } else {
                        // Jika tidak ada hasil pencarian, tampilkan pesan kosong
                        blogList.innerHTML = 'Tidak ada hasil pencarian.';
                    }
                }
            });
        }
    </script>
@endsection
