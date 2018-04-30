@extends('Frontend.master')

@section('title')
    NVHS - Event Detail
@endsection

@section('body')
    <div class="event_block">
        <div class="container">
            <br>
            @if(!empty($detail[0]))
                <h3 class="text-center">{{$detail[0]->title}}</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{URL::to('image/uploads/events/'.$detail[0]->image)}}" alt="photo">
                    </div>
                    <div class="col-lg-5">
                        <br>
                        <h5>Description :</h5>
                        <p class="text-justify"><?php echo htmlspecialchars_decode($detail[0]->details)?></p>
                    </div>
                    <div class="col-md-3">
                        Location : {{$detail[0]->location}}<br><br>
                        <t>Start :</t>{{explode(' ',$detail[0]->starting_date)[0]}}<br>
                        <t>End :</t>{{explode(' ',$detail[0]->ending_date)[0]}}
                    </div>
                </div>
                <br><br>
                <div class="row">
                    @for($i=0;$i<6;$i++)
                        <div class="col-lg-3 col-md-4 col-sm-6 fade-event" style="position: relative">
                            <img src="{{URL::to('image/blank.png')}}" alt="photos">
                            <i class="text-center">TITLE {{$i}}</i>
                        </div>
                    @endfor
                </div>
            @else
                <h5>No event found.</h5>
                <h5>Go to <a href="/Gallery/Event" style="color: whitesmoke">events</a> to view list</h5>
            @endif
        </div>
    </div>

@endsection