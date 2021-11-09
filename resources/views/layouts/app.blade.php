<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RESTAURANTE "EL BUEN GUSTO"</title>

        @include('layouts.style')
        @stack('styles')
    </head>

    <body>



        @include('layouts.header')

        <main class="primary-background">
            <div class="container"></div>
            <div class="row">
                <div class="col s12 m12 l12 l12 xl10 offset-xl1">

                    @yield('content')
                </div>
            </div>


        
        </main>

        @include('layouts.script')
        @stack('scripts')
    </body>
</html>

