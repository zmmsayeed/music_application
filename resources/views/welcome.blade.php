<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css" />
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/music.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
              crossorigin="anonymous">
    </head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">User Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Music Application
            </div>

            <div class="links">
                <a href="{{ route('browse') }}">Browse</a>
                <a href="#">Discover</a>
                <a href="#">Radio</a>
                <a href="#">Music</a>
                <a href="{{ route('register') }}">Premuim</a>
                <a href="#">Help</a>
            </div> 

            <div class="m-b-md" style="margin-top:30px;">
                <a href="#music">
                    <i class="fas fa-chevron-circle-down fa-3x"></i>
                </a>
            </div>                
        </div>
    </div>

    <div class="container-fluid music-container" id="music">
        <div class="container">
            <div class="column add-bottom">
                <div id="mainwrap">
                    <div id="nowPlay">
                        <span id="npAction">Paused...</span><span id="npTitle"></span>
                    </div>
                    <div id="audiowrap">
                        <div id="audio0">
                            <audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio>
                        </div>
                        <div id="tracks">
                            <a id="btnPrev">&larr;</a><a id="btnNext">&rarr;</a>
                        </div>
                    </div>
                    <div id="plwrap">
                        <ul id="plList"></ul>
                    </div>
                </div>
            </div>
            <div class="column add-bottom center">                
            </div>
        </div>
    </div>


<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<!-- Music Player JS -->
<script src="https://cdn.plyr.io/3.5.2/plyr.polyfilled.js"></script>
<script src="{{ asset('js/music.js') }}"></script>

</body>
</html>
