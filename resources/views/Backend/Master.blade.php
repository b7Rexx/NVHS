@include('Backend.includes.head')
<div class="container body">
    <div class="main_container">
        @include('Backend.includes.nav')
        @include('Backend.includes.actionbar')
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>
                @yield('content')
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                </div>
        </div>



        </div>

        @include('Backend.includes.footer')
    </div>
</div>
@include('Backend.includes.foot')