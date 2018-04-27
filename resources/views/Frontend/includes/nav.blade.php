<nav class="navbar navbar-expand-lg" id="stickyheader" xmlns:v-on="http://www.w3.org/1999/xhtml"
     xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"
     xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"
     xmlns:v-on="http://www.w3.org/1999/xhtml">
    <div class="container">

        {{--icon audio animation--}}
        <audio id="beepOnce" style="display:none;" controls="controls" preload="auto">
            {{--<source src="https://a.clyp.it/q2oaawbe.mp3">--}}
            <source src="{{URL::to('audio/badumtiss.mp3')}}">
        </audio>

        <a class="navbar-brand" id="animateIcon" href="{{route('home')}}"><img src="{{URL::to('image/icon.png')}}"
                                                                               alt="icon"> N V H S &nbsp;&nbsp;&nbsp;&nbsp;</a>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('event')}}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                </li>
            </ul>
            {{--<div id="searchDiv">--}}
                <form class="form-inline my-2 my-lg-0" method="post" action="{{route('search')}}">
                    <input class="form-control" id="search" type="search" placeholder="Type keywords and hit enter"
                           name="keyword" autocomplete="off">
                    &nbsp;<i class="fa fa-search pr-3" id="searchToggle" contenteditable="false"> Search</i>
                </form>
            </div>
        {{--</div>--}}
        <nav class="navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</nav>