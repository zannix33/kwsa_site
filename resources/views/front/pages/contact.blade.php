<x-layouts.app-layout>
    <main class="main page-contact">

        <section class="title-module">
            <div class="content-max-width">
                <h1>{{ $item->title }}</h1>
            </div>
        </section>

        <section class="body-section" :class="tab">
            <div class="content-max-width md:flex md:space-between">

                <div class="content">
                    <a href="tel:{{ @$data['ec_contact_phone'] }}" class="phone">{{ @$data['ec_contact_phone'] }}</a>
                    <a href="mailto:{{ @$data['ec_contact_email'] }}" class="email">{{ @$data['ec_contact_email'] }}</a>
                </div>

                <div class="form">
                    @include('components.forms._contact')
                </div>

            </div>
            <div class="content-max-width">

                <div class="map">
                    <app-map
                        :lat="'{{getCoordinates(@$item->location['latlng'], 'lat')}}'"
                        :long="'{{getCoordinates(@$item->location['latlng'], 'lng')}}'"
                    ></app-map>
                </div>

            </div>
        </section>

    </main>
</x-layouts.app-layout>
