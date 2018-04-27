@extends('Frontend.master')

@section('title')
    NVHS - Event
@endsection

@section('body')
    <div class="event_block">
        <div class="container">
            <br>
            <h1 class="text-center">Event</h1>
            @foreach($events as $event)
                <hr>
                <div class="event">
                    <h2 class="text-center">{{strtoupper($event->title)}}</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{URL::to('image/uploads/events/'.$event->image)}}" alt="photo">
                        </div>
                        <div class="col-md-6">
                            <p>{{htmlspecialchars_decode($event->details)}}</p>
                            Location : {{$event->location}}<br>
                            <a href="/Events/{{$event->id}}">See more ... </a>
                        </div>
                        <div class="col-md-3">
                            <t>Starts : </t>{{explode(' ',$event->starting_date)[0]}}<br><br>
                            <t>End : </t>{{explode(' ',$event->ending_date)[0]}}
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection