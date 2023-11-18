<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blog as $blog)
        <url>
            <loc>{{ url('/blog/' . $blog->slug) . '.html' }}</loc>
            <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>
