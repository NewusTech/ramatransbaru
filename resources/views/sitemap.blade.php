<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blog as $blogItem)
        <url>
            <loc>{{ url('/blog/' . $blogItem->slug) . '.html' }}</loc>
            <lastmod>{{ $blogItem->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>
