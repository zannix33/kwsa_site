<x-layouts.app-layout>
    <main class="main page-home">

        <section class="features-section">

            <div class="content-max-width features">
                <div class="feature-box">
                    <div class="feature-title">
                        <strong>Protecting What Matters Most</strong>
                    </div>
                    <div class="feature-content">
                        {{ modFieldValue($data, 'home_features_content') }}
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

            </div>

        </section>

        <section class="about-section">

            <div class="about-container content-max-width">

                <div class="about-title">
                    About <strong>L&V ATM Service</strong>
                </div>

                <div class="about-content">
                    {!! nl2br(modFieldValue($data, 'about_header')) !!}
                </div>

                <div class="about-box">
                    {!! modFieldValue($data, 'about_text') !!}
                </div>

                <div class="about-note">{!! modFieldValue($data, 'about_contact_text') !!}</div>

                <a href="" class="get-atm-button">Get ATM</a>

                <img src="/images/atm-finger.png" class="img-right">

            </div>

        </section>

        <section class="benefits-section">

            <div class="content-max-width">
                <div class="containers benefits-details">
                    <div class="benefits-title">
                        Benefits of Having <strong>ATM Machine</strong> in Your Business
                    </div>

                    <div class="benefits-description">
                        {{ modFieldValue($data, 'benefits_text') }}
                    </div>

                    <div class="benefits-freebies">
                        @foreach($benefits as $benefit)
                            <div class="freebie">
                                <img src="{{ @$benefit['image'] }}">

                                <span>{{ @$benefit['title'] }}</span>
                            </div>
                        @endforeach

                    </div>

                    <a href="" class="get-atm-button brown">Get ATM</a>

                </div>

                <div class="containers left">
                    <div class="left">
                        <div class="benefits-box">
                            <img src="{{@$item->image('benefits_image_1', 'desktop')}}">

                            <p>{{ modFieldValue($data, 'benefits_caption_1') }}</p>

                        </div>

                        <div class="benefits-box">
                            <img src="{{@$item->image('benefits_image_2', 'desktop')}}">

                            <p>{{ modFieldValue($data, 'benefits_caption_2') }}</p>

                        </div>
                    </div>

                    <div class="right">
                        <div class="benefits-box">
                            <img src="{{@$item->image('benefits_image_3', 'desktop')}}">

                            <p>{{ modFieldValue($data, 'benefits_caption_3') }}</p>

                        </div>
                        <div class="benefits-box">
                            <img src="{{@$item->image('benefits_image_4', 'desktop')}}">

                            <p>{{ modFieldValue($data, 'benefits_caption_4') }}</p>

                        </div>
                        <div class="benefits-box">
                            <img src="{{@$item->image('benefits_image_5', 'desktop')}}">

                            <p>{{ modFieldValue($data, 'benefits_caption_5') }}</p>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="process-section">
            <div class="content-max-width">

                <div class="process-title">How the process works?</div>
                <div class="process-description">{{ modFieldValue($data, 'process_text') }}</div>

                <div class="process-container">
                    @foreach($processes as $process)
                        <div class="process-details">
                            <img src="{{ $process['image'] }}">
                            <div class="process-info">
                                {{ $process['title'] }}
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
                        <div class="grow-title">
                            {{ modFieldValue($data, 'contact_title') }}
                        </div>

                        <div class="grow-description">
                            {{ modFieldValue($data, 'contact_text') }}
                        </div>
                    </div>

                    <div class="right">
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
