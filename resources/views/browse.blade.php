@extends('layouts.app')

@section('content')
<div class="container-fluid music-container">
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
@endsection
