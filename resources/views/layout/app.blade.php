<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{config('app.name', 'Test')}}</title>

       
    </head>
    <body>
        @include('inc.navbar')
        <div class='container'>
                @include('inc.messages')
                @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/vendor/ckeditor/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
