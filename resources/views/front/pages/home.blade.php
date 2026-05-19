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

                <!--
                <div class="content-max-width">

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
                -->

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
                                <div class="service-title">
                                    {{ $service['title'] }}
                                </div>
                                <div class="service-content">
                                    {{ $service['content'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

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
                        <div class="contact-container">
                            @include('components.forms._contact')
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="discover-section">
            <div class="content-max-width">
                <div class="discover-container">
                    <div class="left">
                        <img src="/images/discover-1.png">

                        <div class="discover-description">
                            {!! modFieldValue($data, 'footer_text') !!}
                        </div>
                    </div>

                    <div class="right">
                        <div class="discover-title">
                            {!! modFieldValue($data, 'footer_right_text') !!}
                        </div>
                        <div class="disocver-note">
                            {!! modFieldValue($data, 'footer_right_note') !!}
                        </div>
                    </div>

                    <div></div>
                </div>
            </div>
        </section>


    </main>
</x-layouts.app-layout>
