<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $meta->getAttributes()['title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta itemprop="name" content="{{ $meta->getAttributes()['title'] }}">
    <meta itemprop="description" content="{{ $meta->getAttributes()['description'] }}">
    <meta itemprop="image" content="{{ $meta->getAttributes()['image'] }}">

    {!! $meta->display() !!}

    <link rel="stylesheet" href="{{ elixir("css/all.css") }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:700" rel="stylesheet">

    @yield('styles')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-29013244-28', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="logo">
                    <a href="/">
                        <img src="/img/logo.png" alt="Wordpress Killed Me">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<main>
    @yield('content')
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="/">wordpresskilled.me</a> &copy; 2015 by <a href="https://twitter.com/BastienBotella" target="_blank">@BastienBotella</a> and <a href="https://twitter.com/PhillippOh" target="_blank">@PhillippOh</a>
            </div>
        </div>
    </div>
</footer>

<script src="{{ elixir("js/bundle.js") }}"></script>
@yield('scripts')
</body>
</html>