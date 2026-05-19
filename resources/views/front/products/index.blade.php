<x-layouts.app-layout>
    <div class="main">
        <h1>Products Index</h1>
        @foreach($items as $item)
            <a href="{{ route('front.products.detail', $item->slug) }}">
                {{ $item->title }}
            </a>
        @endforeach
    </div>
</x-layouts.app-layout>
