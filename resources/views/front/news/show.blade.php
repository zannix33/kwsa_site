<x-layouts.app-layout>
    <main class="main page-news-detail">

        <section class="body-section">
            <div class="content-max-width">

                <a href="{{route('front.news.index')}}" class="button small md:absolute">Return to All</a>
            </div>

            <div class="content-narrow-width">

                <h1 class="h2">{{ $item->title }}</h1>

                <p class="date">{{ $item->created_at }}</p>

                <h3 class="leadcopy">{{ $item->headline }}</h3>

                <img
                    src="{{ $item->hasImage('cover', 'desktop') ? $item->image('cover', 'desktop') : '/images/news-1.jpg' }}"
                    alt="{{ $item->imageAltText('about_image') }}"
                >

                <div class="wysiwyg">
                    {!! $item->content !!}
                </div>
            </div>
        </section>

    </main>
</x-layouts.app-layout>
