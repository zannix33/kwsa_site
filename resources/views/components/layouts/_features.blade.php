@if(\Modulatte\Core\Concepts\SEO\SEOSettings::$hasPwa)
    @laravelPWA
@endif
@if(seoEnabled())
    {!! SEO::generate(true) !!}
@endif
@if(\Modulatte\Core\Concepts\SEO\SEOSettings::$hasAnalytics)
    <x-layouts._analytics />
@endif
