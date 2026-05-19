<x-layouts.app-layout>
    <main class="main page-service-detail">

        <section class="body-section">
            <div class="top content-max-width">
                <a href="/services" class="left-anchor"><span class="material-icons">arrow_backward</span> Return</a>
            </div>

            <div class="content-max-width md:flex md:space-between">

                <div class="content">
                    <h1 class="h2">{{ @$item->title }}</h1>

                    <div class="wysiwyg">
                        {!! @$item->description !!}
                    </div>
                </div>

                <div class="hero">
                    <img
                        src="{{ $item->hasImage('cover', 'desktop') ? $item->image('cover', 'desktop') : '/images/service-detail.jpg' }}"
                        alt="{{ $item->imageAltText('cover') }}"
                    >
                </div>

            </div>
        </section>

        <section class="faqs-section">
            <div class="content-max-width">

                <h4 class="h2">
                    <img src="/images/svgs/faq-icon.svg" alt="East Coast Bays FAQs">
                    FAQ
                </h4>

            </div>
            <div class="content-max-width">

                @if(!empty($faqs))
                    @foreach($faqs as $item)
                        <article>
                            <div class="title">
                                <h3 class="h4">{{ @$item['title'] }}</h3>
                                <span class="material-icons">expand_more</span>
                            </div>
                            <div class="content">
                                <div class="wysiwyg">
                                    {!! @$item['content'] !!}
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif

            </div>
        </section>

        <section class="gallery-section">
            <div class="content-max-width">

                <h4 class="h2">
                    <img src="/images/svgs/faq-icon.svg" alt="East Coast Bays FAQs">
                    Gallery
                </h4>

            </div>
            <div class="content-max-width">

                @if(!empty($images))
                    <app-slideshow-service-gallery
                        :slides="{{ json_encode($images) }}"
                    ></app-slideshow-service-gallery>
                @endif

            </div>
        </section>

    </main>
</x-layouts.app-layout>
