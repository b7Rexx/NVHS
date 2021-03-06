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
                    <div class="col-md-5 event-image" data-aos="fade-left" data-aos-duration="1500">
                        <a href="/Details/Event/{{$event->id}}">
                            <img src="{{URL::to('image/uploads/events/'.$event->image)}}" alt="photo">
                        </a>
                        <br><br>
                        <a href="/Details/Event/{{$event->id}}"><h4>{{strtoupper($event->title)}}</h4></a>
                        <p><?php echo str_limit(htmlspecialchars_decode($event->details), 70, '...');?></p>
                        Location : {{$event->location}}<br><br>
                        <t>Start :</t>{{explode(' ',$event->starting_date)[0]}}<br>
                        <t>End :</t>{{explode(' ',$event->ending_date)[0]}}
                        <br><br>
                    </div>
                @empty
                    <h4>No events.</h4>
                @endforelse
            </div>
            <br>
            <?php echo $events->render();?>
            <div class="row" style="min-height:50px"></div>

        </div>
    </div>
@endsection