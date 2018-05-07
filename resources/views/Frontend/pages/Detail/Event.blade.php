@extends('Frontend.master')

@section('title')
    NVHS - Event Detail
@endsection

@section('body')
    <?php use App\image;
    $i = 0;?>
    <div class="event_block">
        <div class="container">
            <br>
            @if(!empty($detail[0]))
                <h2 class="pl-5">{{ucfirst($detail[0]->title)}}</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        Location : {{$detail[0]->location}}<br><br>
                        <t>Start :</t>{{explode(' ',$detail[0]->starting_date)[0]}}<br>
                        <t>End :</t>{{explode(' ',$detail[0]->ending_date)[0]}}<br><br>
                    </div>
                    <div class="col-md-4">
                        <h5>Description :</h5>
                        <p class="text-justify"><?php echo strip_tags(htmlspecialchars_decode($detail[0]->details))?></p>
                        <br>
                    </div>
                    <div class="col-md-4 event-image-detail">
                        <img src="{{URL::to('image/uploads/events/'.$detail[0]->image)}}" alt="photo">
                    </div>
                </div>
                <hr>
                <div class="text-center p-4">
                    <button type="button" class="btn btn-secondary"
                            onclick="javascript:window.location.href='Gallery/Image'">
                        <i class="fa fa-camera-retro fa-lg"></i> Gallery
                    </button>
                </div>

                @if(!is_int($detail[0]->image_id))
                    <div class="row pb-3">
                        @foreach($images as $imgData)
                            <?php
                            $imgRef = image::select('id', 'title', 'details')->where('id', '=', $imgData->image_id)->get();
                            $title = $imgRef[0]->title;
                            $details = $imgRef[0]->details;
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in-up" data-aos-duration="1000">
                                <a href="/Details/Gallery/{{$imgData->image_id}}">
                                    <div id="fadeContent{{$i}}">
                                        <img class="p-3 home-gallery" id="fadeImage{{$i}}"
                                             src="{{URL::to('image/uploads/gallery/'.$imgData->image_name)}}"
                                             width="100%" alt="no image">
                                        <div class="fadeTitle" id="fadeTitle{{$i}}">
                                            <h3>&nbsp;&nbsp;&nbsp;{{strtoupper($title)}}</h3>
                                            <p><?php echo strip_tags(str_limit(htmlspecialchars_decode($details), 50))?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php $i++;?>

                        @endforeach
                    </div>
                @else
                    <div class="row">
                        @foreach($galleryImages as $imageData)
                            <div class="col-md-6 col-lg-4 gallery_block">
                                <img class="hover-image"
                                     src="{{URL::to('image/uploads/gallery/'.$imageData->image_name)}}" alt="photo">
                            </div>
                        @endforeach
                    </div>
                @endif
            @else
                <h5>No event found.</h5>
                <h5>Go to <a href="/Gallery/Event" style="color: whitesmoke">events</a> to view list</h5>
            @endif
        </div>
    </div>

@endsection