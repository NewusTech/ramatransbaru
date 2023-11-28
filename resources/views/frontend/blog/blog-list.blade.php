<head>
    <title>Rama Tranz Travel Terpercaya, Kunjungi Kami di Blog - {{ $title2 }}</title>
</head>

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
