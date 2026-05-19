<x-layouts.app-layout>
    <main class="main page-about">

        <section class="title-module">
            <div class="content-max-width">
                <h1>{{ $item->title }}</h1>
            </div>
        </section>

        <section class="body-section">
            <div class="content-max-width md:flex md:space-between">

                <div class="content">
                    @if(!empty($data['about_lead']))
                        <h2>{{ $data['about_lead'] }}</h2>
                    @endif

                    @if(!empty($data['about_content']))
                        <div class="wysiwyg">
                            {!! $data['about_content'] !!}
                        </div>
                    @endif
                </div>

                <div class="hero">
                    <img
                        src="{{ $item->hasImage('about_image', 'desktop') ? $item->image('about_image', 'desktop') : '/images/about-1.jpg' }}"
                        alt="{{ $item->imageAltText('about_image') }}"
                    >

                    <img src="/images/watermark.svg" alt="East Coast Bays watermark" class="watermark">
                </div>

            </div>
        </section>

    </main>
</x-layouts.app-layout>
