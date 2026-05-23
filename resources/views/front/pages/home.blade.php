<x-layouts.app-layout>
    <main class="main page-home">

        <section class="features-section">

            <div class="content-max-width features">
                <div class="feature-box">
                    <div class="feature-title">
                        <strong>{{ modFieldValue($data, 'header_title') }}</strong>
                    </div>
                    <div class="feature-content">
                        {!! modFieldValue($data, 'header_lead_copy') !!}
                    </div>
                </div>

                <div class="feature-box">
                    <img src="/images/guards/heroimg1.png">
                </div>

                {{--@foreach($features as $feature)
                    <div class="feature-box">
                        <div class="feature-icon">
                            <img src="{{ $feature['icon'] }}">
                        </div>
                        <div class="feature-lead">
                            {{ $feature['title'] }}
                        </div>
                        <div class="feature-description">
                            {{ $feature['content'] }}
                        </div>
                    </div>
                @endforeach
                --}}


                <div class="content-max-width flex feature-items">
                    @foreach($features as $feature)
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ $feature['icon'] }}">
                            </div>
                            <div class="feature-lead">
                                {{ $feature['title'] }}
                            </div>
                            <div class="feature-description">
                                {{ $feature['content'] }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>

        <section class="services-section">

            <div class="services-container content-max-width">

                <div class="services-title">
                    {!! nl2br(modFieldValue($data, 'services_title')) !!}
                </div>
                <div class="services-description">
                    {!! nl2br(modFieldValue($data, 'services_description')) !!}
                </div>

                <div class="services-items content-max-width">

                    @foreach($services as $service)
                        <div class="service-main">
                            <div class="service-image">
                                <img src="{{ $service['service_image'] }}">
                            </div>

                            <div class="service-content">
                                <h4 class="service-title">
                                    {{ $service['title'] }}
                                </h4>
                                <p class="service-content">
                                    {{ $service['content'] }}
                                </p>

                                <a href="#contact-form"  class="protect-button">Get Protected Today</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section class="clients-section">

            <div class="content-max-width">
                <h1 class="client-section-title">Trusted Across the Philippines</h1>


                <div class="client-logos" id="carousel">
                    <app-slideshow-service-gallery
                        :slides="{{ json_encode($client_logos) }}"
                    ></app-slideshow-service-gallery>
                    {{--<img src="/images/cebuanalogo.svg">
                    <img src="/images/psbanklogo.svg">
                    <img src="/images/711logo.svg">
                    <img src="/images/bpilogo.svg">--}}

                </div>
            </div>


        </section>

        <section class="who-we-are">
            <div class="content-max-width">
                <div class="wwa-container">

                    <div class="left">
                        <h4 class="title">{!! nl2br(modFieldValue($data, 'wwa_title')) !!}</h4>
                        <h4 class="quote">"{!! nl2br(modFieldValue($data, 'wwa_quote')) !!}"</h4>

                        <a href="#contact-form" class="protect-button">Get Protected Today</a>
                    </div>

                    <div class="right">

                        <p class="content">
                            {!! nl2br(modFieldValue($data, 'wwa_content')) !!}
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="about-section content-max-width">

            <div class="about-box">
                <div class="about-icon">
                    <img src="/images/missionicon.svg">
                </div>

                <h2 class="about-title">Mission</h2>
                <p class="about-content">
                    To safeguard our clients’ well-being by delivering superior security services through highly
                    trained professionals and proactive, tailored security solutions aligned with national and
                    international standards.
                </p>
            </div>

            <div class="about-box">
                <div class="about-icon">
                    <img src="/images/visionicon.svg">
                </div>

                <h2 class="about-title">Vision</h2>
                <p class="about-content">
                    To safeguard our clients’ well-being by delivering superior security services through highly
                    trained professionals and proactive, tailored security solutions aligned with national and
                    international standards.
                </p>
            </div>

            <div class="about-box">
                <div class="about-icon">
                    <img src="/images/valuesicon.svg">
                </div>

                <h2 class="about-title">Values</h2>
                <p class="about-content">
                    To safeguard our clients’ well-being by delivering superior security services through highly
                    trained professionals and proactive, tailored security solutions aligned with national and
                    international standards.
                </p>
            </div>

        </section>

        <section class="we-want-you content-max-width">
            <div class="wwy-box">
                <div class="left">
                    <h2 class="title">{!! nl2br(modFieldValue($data, 'wwy_title')) !!}</h2>

                    <h4 class="description">{!! nl2br(modFieldValue($data, 'wwy_description')) !!}</h4>

                    @foreach($wewantyous as $wewantyou)
                        <div class="wwy-reason-box">
                            <h3 class="title">{!! nl2br(modFieldValue($wewantyou, 'title')) !!}</h3>
                            <h4 class="lead">{!! nl2br(modFieldValue($wewantyou, 'lead')) !!}</h4>

                            <div class="wysiwyg reason-content">
                                {!! modFieldValue($wewantyou, 'content') !!}
                            </div>
                        </div>
                    @endforeach

                    <div class="reason-bottom">Step up. Serve with pride. Grow with KSA.</div>

                </div>

                <div class="right"></div>
            </div>

        </section>

        <section class="grow-section">
            <div class="content-max-width">
                <div class="grow-container">
                    <div class="left">

                        <img src="/images/contactus.png">

                    </div>

                    <div class="right">
                        <div class="grow-title">
                            Get in Touch
                        </div>
                        <div class="contact-container" id="contact-form">
                            @include('components.forms._contact')
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-layouts.app-layout>
