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
            <div class="row">
                @for($i=0;$i<15;$i++)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="gallery_block" data-title="gallery">

                            <img src="{{URL::to('image/uploads/gallery/1.jpg')}}" alt="photo">
                            <h3>&nbsp;&nbsp;&nbsp;IMAGE TITLE</h3>
                            <p class="text-justify">{{str_limit("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci
                                blanditiis,
                                corporis cumque delectus deserunt expedita, facilis in laborum libero molestias nam
                                nihil
                                odio
                                perspiciatis placeat quam quasi quod saepe.",100)}}</p>
                            <a href="/Gallery/slug-info-{{$i}}">See more ...</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection