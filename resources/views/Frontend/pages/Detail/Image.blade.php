@extends('Frontend.master')

@section('title')
    NVHS - Image Detail
@endsection

@section('body')
    <div class="video_block">
        <div class="container">
            <br>
            @if(!empty($detail[0]))
                <h3 class="text-center">{{$detail[0]->title}}</h3>
                <br>
                <div class="row">
                    <div class="col-lg-7">
                        <img src="{{URL::to('gallery/'.$detail[0]->id)}}" alt="No image in id no {{$detail[0]->id}}"></div>
                    <div class="col-lg-5">
                        <br>
                        <h5>Description :</h5>
                        <p><?php echo htmlspecialchars_decode($detail[0]->details)?></p>
                    </div>
                </div>
            @else
                <h5>No image found.</h5>
                <h5>Go to <a href="/Gallery/Image" style="color: whitesmoke">images</a> to view list</h5>
            @endif
        </div>
    </div>
@endsection