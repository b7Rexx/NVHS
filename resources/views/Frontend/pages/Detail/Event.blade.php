@extends('Frontend.master')

@section('title')
    NVHS - Event Detail
@endsection

@section('body')
    <div class="event_block">
        <div class="container">
            <br>
            <h1 class="text-center">Event</h1>
            <div class="event">
                {{$slugInfo}}
                    <div class="row">
                    <div class="col-md-3">
                        <img src="{{URL::to('image/uploads/events/'.$detail[0]->image)}}" alt="photo">
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, laborum libero nulla
                            pariatur
                            perferendis sunt velit vero! Ad commodi consequuntur dolorem esse inventore natus neque
                            odit
                            quisquam. Ducimus, porro repellendus.</p>
                    </div>
                    <div class="col-md-3">
                        {{date('Y/m/d')}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection