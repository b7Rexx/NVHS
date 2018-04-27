@extends('Frontend.master')

@section('title')
    NVHS - Gallery
@endsection

@section('body')
    <div class="gallery top-body">
        <div class="container">
            <br>
            {{--<h1 class="text-center">Gallery</h1>--}}
            <hr>
            <div class="row">
                <div class="gallery_block" data-title="gallery">
                    {{$slugInfo}}
                    <br>
                    <img src="{{URL::to('image/uploads/gallery/1.jpg')}}" style="width:300px;height:300px" alt="photo">
                    <h3>&nbsp;&nbsp;&nbsp;IMAGE TITLE</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                        adipisci
                        blanditiis,
                        corporis cumque delectus deserunt expedita, facilis in laborum libero molestias nam
                        nihil
                        odio
                        perspiciatis placeat quam quasi quod saepe.</p>
                </div>
            </div>
        </div>
    </div>
@endsection