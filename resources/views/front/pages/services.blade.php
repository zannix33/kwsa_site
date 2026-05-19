<x-layouts.app-layout>
    <main class="main page-services">

        <section class="title-module">
            <div class="content-max-width">
                <h1>{{ $item->title }}</h1>
            </div>
        </section>

        <section class="body-section">
            <div class="content-max-width">

                <div class="news-wrap">

                    <div class="featured-list md:flex md:justify-between md:flex-1">
                        <div class="left md:w-1/2">
                            @if($service = getServicesByIndex($services, 0))
                                <article>
                                    <a href="{{$service['url']}}">
                                        <img src="{{$service['image']}}" alt="{{$service['image_alt_text']}}">
                                        <div class="content">
                                            <h3>{{$service['title']}}</h3>
                                            <p class="more">Learn More <span class="material-icons">arrow_forward</span></p>
                                        </div>
                                    </a>
                                </article>
                            @endif
                        </div>
                        <div class="right md:w-1/2">
                            @if($featuredList = getServicesByIndex($services, 1, 4))
                                @foreach($featuredList as $service)
                                    <article>
                                        <a href="{{$service['url']}}">
                                            <img src="{{$service['image']}}" alt="{{$service['image_alt_text']}}">
                                            <div class="content">
                                                <h3 class="h4">{{$service['title']}}</h3>
                                                <p class="more">Learn More <span class="material-icons">arrow_forward</span></p>
                                            </div>
                                        </a>
                                    </article>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="list">
                        @if($regularList = getServicesByIndex($services, 5, null, true))
                            @foreach($regularList as $service)
                                <article>
                                    <a href="{{ $service['url'] }}" class="md:flex">
                                            <img
                                                src="{{ $service['image'] }}"
                                                alt="{{ $service['image_alt_text'] }}"
                                                class="thumb"
                                            >

                                        <div class="content">
                                            <h3 class="h4">{{ $service['title'] }}</h3>
                                            <p class="description">{!! $service['summary'] !!}</p>

                                            <p class="more">Learn More</p>
                                        </div>
                                    </a>
                                </article>
                            @endforeach
                        @endif
                    </div>

                </div>

                {{-- <x-layouts._pagination /> --}}

            </div>
        </section>
    </main>
</x-layouts.app-layout>
