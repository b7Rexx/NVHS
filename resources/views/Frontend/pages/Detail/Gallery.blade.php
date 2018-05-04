@extends('Frontend.master')

@section('title')
    NVHS - Gallery Detail
@endsection

@section('body')
    <div class="gallery_detail_block">
        <div class="container">
            <br>
            @if(!empty($detail[0]))
                <h3 class="text-center">{{$detail[0]->title}}</h3>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <h5>Description :</h5>
                        <p><?php echo htmlspecialchars_decode($detail[0]->details)?></p>
                    </div>
                    <div class="col-md-8 p-2">
                        <img src="{{URL::to('image/uploads/gallery/'.$images[0]->image_name)}}" alt="photos">
                    </div>
                </div>
            @else
                <h5>No image found.</h5>
                <h5>Go to <a href="/Gallery/Image" style="color: whitesmoke">image gallery</a> to view list</h5>
            @endif
        </div>
    </div>
@endsection