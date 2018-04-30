@extends('Frontend.master')

@section('title')
    NVHS - Home
@endsection

@section('body')
    <div class="body">
        <div class="top-body">
            <div class="container">
                <div class="text-center p-5">
                    <h>NVHS</h>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cum doloribus ipsa
                        temporibus? Accusamus assumenda.</h5>
                </div>


                {{--Carousel Slider--}}
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{URL::to('image/uploads/1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('image/uploads/2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('image/uploads/3.jpg')}}" alt="Third slide">
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wave1">
            <svg viewBox="0 0 500 200" preserveAspectRatio="xMinYMin meet">
                <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z"></path>
                <defs>
                    <linearGradient id="MyGradient1">
                        <stop offset="20%" stop-color="#4295df"></stop>
                        <stop offset="95%" stop-color="#fff"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="container">
            <div class="row p-5">
                @for($i = 0; $i<6;$i++)
                    <div class="col-md-4 col-sm-4">
                        <div data-aos="fade-left" data-aos-duration="2500">
                            <h1>TITLE</h1>
                            <p class="text-justify">{{str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid assumenda deleniti
                        eligendi ex exercitationem expedita fugit, hic ipsum iste itaque nobis non quidem quo quod
                        recusandae repudiandae saepe tempore.', 150)}}</p>
                            <a href="">See more...</a>
                            <hr>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="mid-body">
        <div class="container">
            <div class="text-center p-4">
                <button type="button" class="btn btn-secondary" onclick="javascript:window.location.href='Gallery'">
                    <i class="fa fa-camera-retro fa-lg"></i> Gallery
                </button>
            </div>
            <div class="row pb-3">
                @for($i = 0; $i<8;$i++)
                    <div class="col-md-3 col-sm-3" data-aos="zoom-in-up" data-aos-duration="3000">
                        <a href="/Details/Image/{{$i}}">
                            <div id="fadeContent{{$i}}">
                                <img class="p-3" id="fadeImage{{$i}}" src="{{URL::to('image/blank.png')}}"
                                     width="100%" alt="no image">
                                <div class="fadeTitle" id="fadeTitle{{$i}}">
                                    <h3>&nbsp;&nbsp;&nbsp;TITLE {{$i}}</h3>
                                    <p>{{str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                    excepturi iure obcaecati possimus sunt suscipit velit veniam? Amet debitis eius enim
                                    itaque iusto quia quos reprehenderit, sequi tempora veritatis voluptatibus!',50)}} </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection