@extends('Frontend.master')

@section('title')
    NVHS - Gallery Detail
@endsection

@section('body')
    <div class="gallery_detail_block">
        <div class="container">
            <br>
            @if(!empty($detail[0]))
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-center">{{ucfirst($detail[0]->title)}}</h3>
                    </div>
                    <div class="col-md-8">
                        <p>Description :<br><?php echo strip_tags(htmlspecialchars_decode($detail[0]->details))?></p>
                    </div>
                </div>
                <div class="row">
                    @foreach($images as $imgData)
                        <div class="col-md-6 col-lg-4 gallery_block">
                            <img class="hover-image" src="{{URL::to('image/uploads/gallery/'.$imgData->image_name)}}" alt="photo">
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