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
                    <div class="col-lg-5">
                        <br>
                        <h5>Description :</h5>
                        <p><?php echo htmlspecialchars_decode($detail[0]->details)?></p>
                    </div>
                </div>
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-lg-3 col-md-4 col-sm-6 fade-event" style="position: relative">
                            <img src="{{URL::to('image/uploads/gallery/'.$image->image_name)}}" alt="photos"
                                 class="custom-gallery custom-image-view">
                        </div>
                    @endforeach
                </div>
            @else
                <h5>No image found.</h5>
                <h5>Go to <a href="/Gallery/Image" style="color: whitesmoke">image gallery</a> to view list</h5>
            @endif
        </div>
    </div>
@endsection