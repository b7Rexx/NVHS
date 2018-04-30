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
                        <li><a title="Images" href="/Gallery/Image/"><i class="fa fa-image fa-3x"> <strong>
                                        Images</strong></i></a></li>
                    </div>
                @else
                    <li><a title="Images" href="/Gallery/Image/"><i class="fa fa-image fa-3x"></i></a></li>
                @endif
                @if($GalleryType == 'Video')
                    <div class="G_active">
                        <li><a title="Videos" href="/Gallery/Video"><i class="fa fa-video-camera fa-3x"> <strong>
                                        Videos</strong></i></a></li>
                    </div>
                @else
                    <li><a title="Videos" href="/Gallery/Video"><i class="fa fa-video-camera fa-3x"></i></a></li>
                @endif
            </ul>
            <br><br>
            <div class="row">
                @if($GalleryType == 'Image')
                    @forelse($images as $image)
                    @empty
                        <h4 class="text-center">No images.</h4>
                    @endforelse
                @elseif($GalleryType == 'Video')
                    @forelse($videos as $video)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div title="{{$video->title}}" class="gallery_block" data-title="gallery">
                                <a href="/Details/Video/{{$video->id}}"><h3>{{str_limit($video->title,30)}}</h3></a>
                                <iframe src="https://www.youtube.com/embed/{{$video->video_name}}" frameborder="0"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <br><br>
                                <p class="text-justify"><?php echo str_limit(htmlspecialchars_decode($video->details), 50, '...')?></p>
                                <a href="/Details/Video/{{$video->id}}">Details... </a>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">No videos.</h4>
                    @endforelse
                @endif
            </div>

            <div class="row" style="min-height:100px">

            </div>
        </div>
    </div>
@endsection