<x-layouts.app-layout>
    <main class="main page-gallery">

        <section class="title-module">
            <div class="content-max-width">
                <h1>{{ $item->title }}</h1>
            </div>
        </section>

        <section class="body-section">
            <div class="content-max-width">

                <div class="lead">
                    @if(!empty($data['gallery_lead_copy']))
                        <h2>{{ $data['gallery_lead_copy'] }}</h2>
                    @endif
                </div>

                <app-gallery
                    :categories="{{ json_encode($categories) }}"
                    :slides="{{ json_encode($photos) }}"
                ></app-gallery>

                @include('components.layouts._pagination', ['paginator' => $items])
            </div>
        </section>

    </main>
</x-layouts.app-layout>
