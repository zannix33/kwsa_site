{!! '<'. '?xml version="1.0" encoding="UTF-8"?>' !!}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($maps as $map)
    <url>
      <loc>{{ $map->loc }}</loc>
      <lastmod>{{ $map->lastmod }}</lastmod>
      <priority>0.80</priority>
    </url>
@endforeach
</urlset>
