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
            @else
                <h5>No video found.</h5>
                <h5>Go to <a href="/Gallery/Video" style="color: whitesmoke">videos</a> to view list</h5>
            @endif
        </div>
    </div>
@endsection