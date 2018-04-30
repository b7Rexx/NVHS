@extends('Frontend.master')

@section('title')
    NVHS - Gallery
@endsection

@section('body')
    <div class="gallery top-body">
        <div class="container">
            <br>
            <h1 class="text-center">Gallery</h1>
            <hr>

            <ul class="nav tabs">
                @if($GalleryType == 'Image')
                    <div class="G_active">
                        <li><a title="Images" href="/Gallery/Image/"><i class="fa fa-image fa-3x"> <strong> Images</strong></i></a></li>
                    </div>
                @else
                    <li><a title="Images" href="/Gallery/Image/"><i class="fa fa-image fa-3x"></i></a></li>
                @endif
                @if($GalleryType == 'Video')
                    <div class="G_active">
                        <li><a title="Videos" href="/Gallery/Video"><i class="fa fa-video-camera fa-3x"> <strong> Videos</strong></i></a></li>
                    </div>
                @else
                    <li><a title="Videos" href="/Gallery/Video"><i class="fa fa-video-camera fa-3x"></i></a></li>
                @endif
            </ul>
            <br><br>
            <div class="row">
                @for($i=0;$i<15;$i++)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="gallery_block" data-title="gallery">
                            <h3>&nbsp;&nbsp;&nbsp;IMAGE TITLE</h3>
                            <img src="{{URL::to('image/uploads/gallery/1.jpg')}}" alt="photo">
                            <br><br>
                            <p class="text-justify">{{str_limit("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci
                                blanditiis,
                                corporis cumque delectus deserunt expedita, facilis in laborum libero molestias nam
                                nihil
                                odio
                                perspiciatis placeat quam quasi quod saepe.",150)}}</p>
                            <a href="/Details/Gallery/slug-info-{{$i}}">See more...</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection