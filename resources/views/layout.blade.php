<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ elixir("css/all.css") }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:700" rel="stylesheet">

    @yield('styles')
</head>

<body>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center-align">
                <div class="logo">
                    <a href="/"><span>W</span>ord<span>p</span>ress <span>K</span>illed <span>M</span>e</a>
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
                bla
            </div>
        </div>
    </div>
</footer>

<script src="{{ elixir("js/bundle.js") }}"></script>
@yield('scripts')
</body>
</html>