<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-layouts._meta />
        <link rel="preload" href="https://use.typekit.net/gbf5hzw.css" as="style">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="preload" href="https://fonts.googleapis.com/icon?family=Material+Icons" as="style">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
        <link rel="preload" href="{{ mix('js/app.js') }}" as="script">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/gbf5hzw.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <x-layouts._features />
    </head>
    <body>
        <div id="app">
            <!--[if !IE]> -->
            <section id="site-loader" :class="{ 'hide' : isLoaded }" ></section>
            <!-- <![endif]-->
            <app-header
                :header="{!! cleanVueQuotes(setting('header_text')) !!}"
                :menu="{{json_encode(navigationMenu())}}"
                :data="{{ json_encode([
                    'site_name' => setting('site_name'),
                    'note' => setting('header_note')
                ]) }}"
            ></app-header>

            <main role="main">
                {{ $slot }}
            </main>

            <x-layouts._footer />
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key={{env('GOOGLE_MAPS_API_KEY', null)}}"></script>
</html>
