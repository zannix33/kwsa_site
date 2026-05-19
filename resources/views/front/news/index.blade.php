<x-layouts.app-layout>
    <main class="main page-news">

        <section class="title-module">
            <div class="content-max-width">
                <h1>{{!empty($page) ? $page->title : 'News'}}</h1>
            </div>
        </section>

        <section class="body-section">
            <div class="content-max-width">

                <div class="news-wrap md:flex md:justify-between">

                    <div class="list">
                        @foreach($items as $item)
                            <article>
                                <a href="{{ route('front.news.detail', $item->slug) }}" class="md:flex">
                                    <img src="/images/news-1.jpg" alt="{{ $item->title }}" class="thumb">

                                    <span class="content">
                                        <h3 class="h4">{{ $item->title }}</h3>
                                        <p class="date">{{ $item->created_at }}</p>
                                        <p class="description">{{ $item->headline }}</p>

                                        <p class="more">Learn More</p>
                                    </span>
                                </a>
                            </article>
                        @endforeach
                    </div>

                    <div class="archive">
                        <h4 class="title">Archive</h4>

                        <ul>
                            @foreach($archives as $archive)
                                <li><a href="{{$archive->url}}">{{$archive->label}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>

                @include('components.layouts._pagination', ['paginator' => $items])


            </div>
        </section>
    </main>
</x-layouts.app-layout>
