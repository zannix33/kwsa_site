@extends('twill::layouts.free')

@section('primaryNavigation')
    @if(config('twill-navigation.analytics.primary_navigation') !== null)
        <nav class="nav">
            <div class="container">
                <ul class="nav__list">
                    @foreach(config('twill-navigation.analytics.primary_navigation') as $item)
                        <li class="nav__item">
                            <a href="{{ route($item['route']) }}">{{ $item['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    @endisset
@endsection

@section('customPageContent')
    {{ $slot }}
@stop
