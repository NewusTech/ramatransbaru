<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($data as $item)
        <url>
            <loc>{{ $item['loc'] }}</loc>
            <lastmod>{{ $item['lastmod'] }}</lastmod>
        </url>
    @endforeach
    @foreach ($blog as $blog)
        <url>
            <loc>{{ url('/blog/' . $blog->slug) . '.html' }}</loc>
            <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
    @foreach ($layanan as $layanan)
        <url>
            <loc>{{ url('/detail-jasa-transportasi/' . $layanan->slug) . '.html' }}</loc>
            <lastmod>{{ $layanan->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
    @foreach ($jenisLayanan as $jenisLayanan)
        <url>
            <loc>{{ url('/layanan/' . $jenisLayanan->slug) }}</loc>
            <lastmod>{{ $jenisLayanan->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
    @foreach ($lokasi as $lokasi)
        <url>
            <loc>{{ url('/lokasi-kami/' . $lokasi->slug) }}</loc>
            <lastmod>{{ $lokasi->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>
