<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', isset($configs['name']) ? $configs['name'] : '') </title>
    <meta property="og:title" content="@yield('title', isset($configs['name']) ? $configs['name'] : '')" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="@yield('description', isset($configs['description']) ? $configs['description'] : '')" />
    <meta name="keywords" content="@yield('keywords', isset($configs['keywords']) ? $configs['keywords'] : '')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url" content="{{Request::url()}}" />
    {{ HTML::style(elixir('assets/css/frontend/frontend.css')) }}
    @stack('prestyles')
</head>
    <body class="{{$page or 'home'}} option2">
        @include('frontend._partials.header')
        @yield('page-content')
        @include('frontend._partials.footer')
        @include('frontend._partials.social')
        {{ HTML::script('vendor/jquery/jquery.min.js') }}
        {{ HTML::script('vendor/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script(elixir('assets/js/frontend/frontend.js')) }}
        @stack('prescripts')
    </body>
</html>
