<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="big-deal">
        <meta name="keywords" content="big-deal">
        <meta name="author" content="big-deal">
        @include('web.layouts.links')
        <title>{{isset($title)?$title:'Dev Buyer'}}</title>
    </head>
    <body class="bg-light">
        
        @include('web.layouts.header')
        
        @yield('content')
        
        @include('web.layouts.footer')
        
        @include('web.layouts.scripts')
        @yield('js')
    </body>
</html>

