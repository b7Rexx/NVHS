@extends('Frontend.master')

@section('title')
    NVHS - Video Detail
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
                        <iframe height="400px" width="600px"
                                src="https://www.youtube.com/embed/{{$detail[0]->video_name}}"
                                frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-5">
                        <br>
                        <h5>Description :</h5>
                        <p><?php echo htmlspecialchars_decode($detail[0]->details)?></p>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-6 col-md-3">

                    </div>
                    <div class="col-lg-6 col-md-9 border">
                        <br>
                        <h5 class="text-right">More Videos</h5>
                        <hr>
                        <div style="max-height: 300px;overflow-x: hidden;overflow-y: scroll">
                            @forelse($related_videos as $video)
                                <div class="row">
                                    <div class="col-sm-4 related-video">
                                        <iframe src="https://www.youtube.com/embed/{{$video->video_name}}"
                                                frameborder="0"
                                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>{{$video->title}}</h5>
                                        <p>{{str_limit($video->details,50)}}</p>
                                    </div>
                                </div>
                            @empty
                                <p>Cant find related videos.</p>
                                <h5>Go to <a href="/Gallery/Video" style="color: whitesmoke">videos</a> to view list
                                </h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            @else
                <h5>No video found.</h5>
                <h5>Go to <a href="/Gallery/Video" style="color: whitesmoke">videos</a> to view list</h5>
            @endif
        </div>
    </div>
@endsection