@extends('Frontend.master')

@section('title')
    NVHS - Home
@endsection

@section('body')
    <div class="body">
        <div class="top-body">
            <div class="container">
                <div class="text-center p-5">
                    <h1>N V H S</h1>
                    <h4>National Vocational Hospitality Services </h4>
                    <h><i class="fa fa-quote-left"></i>Quote!!!Lorem ipsum dolor sit amet.<i
                                class="fa fa-quote-right"></i></h>
                </div>

                <div class="row">
                    <div class="col-md-8 col-lg-8">

                        {{--Carousel Slider--}}
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{URL::to('image/uploads/carousel/1.jpg')}}"
                                         alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{URL::to('image/uploads/carousel/2.jpg')}}"
                                         alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{URL::to('image/uploads/carousel/3.jpg')}}"
                                         alt="Third slide">
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
                    <div class="col-md-1"></div>
                    <div class="col-md-3 event-home">
                        <br>
                        <p class="text-right">Latest Event</p>
                        <div>
                            <hr>
                            <a href="/Details/Event/{{$event[0]->id}}">
                                <img class="float-right" src="{{URL::to('image/uploads/events/'.$event[0]->image)}}" height="120px" width="120px"
                                     alt="photo">
                            </a>
                            <br><br>
                            <a href="/Details/Event/{{$event[0]->id}}"><h4>{{strtoupper($event[0]->title)}}</h4></a>
                            <p><?php echo strip_tags(str_limit(htmlspecialchars_decode($event[0]->details), 50, '...'));?></p>
                            Location : {{$event[0]->location}}<br><br>
                            <t>Start :</t>{{explode(' ',$event[0]->starting_date)[0]}}<br>
                            <t>End :</t>{{explode(' ',$event[0]->ending_date)[0]}}
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wave1">
            <svg viewBox="0 0 500 200" preserveAspectRatio="xMinYMin meet">
                <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z"></path>
                <defs>
                    <linearGradient id="MyGradient1">
                        <stop offset="20%" stop-color="#33cccc"></stop>
                        <stop offset="95%" stop-color="#fff"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="container">
            <div class="row p-5">
                @for($i = 0; $i<4;$i++)
                    <div class="col-sm-6">
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
                <button type="button" class="btn btn-secondary"
                        onclick="javascript:window.location.href='Gallery/Image'">
                    <i class="fa fa-camera-retro fa-lg"></i> Gallery
                </button>
            </div>
            <div class="row pb-3">
                <?php use App\image;
                $i = 0;?>
                @foreach($images as $imgData)
                    <?php
                    $imgRef = image::select('id', 'title', 'details')->where('id', '=', $imgData->image_id)->get();
                    $title = $imgRef[0]->title;
                    $details = $imgRef[0]->details;
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in-up" data-aos-duration="2000">
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


        </div>
    </div>
@endsection