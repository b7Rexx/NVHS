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
                        <li><a title="Images" href="/Gallery/Image/"><i class="fa fa-image fa-2x"> <strong>
                                        Images</strong></i></a></li>
                    </div>
                @else
                    <li><a title="Images" href="/Gallery/Image/"><i class="fa fa-image fa-2x"></i></a></li>
                @endif
                @if($GalleryType == 'Video')
                    <div class="G_active">
                        <li><a title="Videos" href="/Gallery/Video"><i class="fa fa-video-camera fa-2x"> <strong>
                                        Videos</strong></i></a></li>
                    </div>
                @else
                    <li><a title="Videos" href="/Gallery/Video"><i class="fa fa-video-camera fa-2x"></i></a></li>
                @endif
            </ul>
            <br><br>
            <div class="row">
                @if($GalleryType == 'Image')
                    @forelse($images as $image)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div title="{{$image->title}}" class="gallery_block" data-title="gallery"
                                 data-aos="fade-left" data-aos-duration="1500">
                                <a href="/Details/Image/{{$image->id}}"><h3>{{str_limit($image->title,15)}}</h3></a>
                                <br><br>
                                <a href="/Details/Image/{{$image->id}}"><?php echo str_limit(htmlspecialchars_decode($image->details), 100)?></p>
                                    <br>...Details... </a>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">No images.</h4>
                        <div class="row" style="min-height:200px"></div>
                    @endforelse
                @elseif($GalleryType == 'Video')
                    @forelse($videos as $video)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div title="{{$video->title}}" class="gallery_block" data-title="gallery"
                                 data-aos="fade-left" data-aos-duration="1500">
                                <a href="/Details/Video/{{$video->id}}">
                                    <h3>{{str_limit($video->title,15)}}</h3>
                                </a>
                                <iframe src="https://www.youtube.com/embed/{{$video->video_name}}"
                                        frameborder="0"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <br><br>
                                <a href="/Details/Video/{{$video->id}}">Details... </a>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">No videos.</h4>
                        <div class="row" style="min-height:200px"></div>
                    @endforelse
                @endif
            </div>
            <hr>
            @if($GalleryType == 'Image')
                <?php echo $images->render();?>
            @elseif($GalleryType == 'Video')
                <?php echo $videos->render();?>
            @endif
            <div class="row" style="min-height:50px"></div>
        </div>
    </div>
@endsection