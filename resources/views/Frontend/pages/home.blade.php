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
                <button type="button" class="btn btn-secondary"
                        onclick="javascript:window.location.href='Gallery/Image'">
                    <i class="fa fa-camera-retro fa-lg"></i> Gallery
                </button>
            </div>
            <div class="row pb-3">
                <?php $i = 0;?>
                @foreach($images as $image)
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in-up" data-aos-duration="2000">
                        <a href="/Details/Gallery/{{$image->id}}">
                            <div id="fadeContent{{$i}}">
                                <?php $featured_image = DB::table('images_references')->where('image_id', '=', $image->id)->first();
                                $f_img = (isset($featured_image->image_name)) ? $featured_image->image_name : 'no_image';?>
                                <img class="p-3 home-gallery" id="fadeImage{{$i}}"
                                     src="{{URL::to('image/uploads/gallery/'.$f_img)}}"
                                     width="100%" alt="no image">
                                <div class="fadeTitle" id="fadeTitle{{$i}}">
                                    <h3>&nbsp;&nbsp;&nbsp;{{strtoupper($image->title)}}</h3>
                                    <p><?php echo str_limit(htmlspecialchars_decode($image->details), 50)?></p>
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