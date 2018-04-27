<nav class="navbar navbar-expand-lg" id="stickyheader">
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
                    <div class="dropdown">
                        <button class="nav-link dropbtn">Company <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="/Company/Food-Hygiene">Food Hygiene</a>
                            <a href="/Company/Training">Training</a>
                            <a href="/Company/Home-Stay">Home Stay</a>
                            <a href="/Company/Restaurant-Management">Restaurant Management</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('event')}}">Events</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{route('gallery')}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                </li>
            </ul>
            {{--<div id="searchDiv">--}}
            <form class="form-inline my-2 my-lg-0" method="post" action="{{route('search')}}">
                {{csrf_field()}}
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