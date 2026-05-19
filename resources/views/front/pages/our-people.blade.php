<x-layouts.app-layout>
    <main class="main page-about">

        <section class="title-module">
            <div class="content-max-width">
                <h1>{{ $item->title }}</h1>
            </div>
        </section>

        <section class="body-section">
            <app-our-people
                :people="{{ json_encode($people) }}"
            ></app-our-people>

        </section>

    </main>
</x-layouts.app-layout>
