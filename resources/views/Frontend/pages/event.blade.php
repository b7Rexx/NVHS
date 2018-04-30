@extends('Frontend.master')

@section('title')
    NVHS - Event
@endsection

@section('body')
    <div class="event_block">
        <div class="container">
            <br>
            <h1 class="text-center">Events</h1>
            <hr>
            <div class="row">
                @forelse($events as $event)
                    <div class="col-md-6">
                        <a href="/Details/Event/{{$event->id}}"><h4>{{strtoupper($event->title)}}</h4></a>
                        <br>
                        <a href="/Details/Event/{{$event->id}}">
                            <img src="{{URL::to('image/uploads/events/'.$event->image)}}" alt="photo">
                        </a>
                        <p><?php echo str_limit(htmlspecialchars_decode($event->details), 120, '...');?></p>
                        Location : {{$event->location}}<br><br>
                        <t>Start :</t>{{explode(' ',$event->starting_date)[0]}}<br>
                        <t>End :</t>{{explode(' ',$event->ending_date)[0]}}
                    </div>
                @empty
                    <h4>No events.</h4>
                @endforelse
            </div>

        </div>
    </div>
@endsection