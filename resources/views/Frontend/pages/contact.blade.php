@extends('Frontend.master')

@section('title')
    NVHS - Contact Us
@endsection

@section('body')
    <div class="contact_block">
        <div class="container">
            <br>
            <h1 class="text-center">Conatct Us</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{URL::to('image/logo.png')}}" alt="logo">
                    <h2>N V H S</h2>
                    <h4>National Vocational Hospitality Services</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                        explicabo facilis incidunt
                        magnam neque quis repellendus repudiandae. Aliquam commodi, consectetur eos fuga ipsa porro
                        soluta voluptatibus? Labore maxime nobis odit.</p>
                </div>
                <div class="col-sm-9 col-md-5 col-lg-5">
                    <br>
                    <h3 class="text-center">MAIL</h3>
                    @include('Backend.includes.message')
                    <hr>
                    <form action="{{route('send-mail')}}" method="post">
                        {{csrf_field()}}
                        <label> Your Email : </label>
                        <input type="email" class="form-control" name="email">
                        <label> Your Name : </label>
                        <input type="text" class="form-control" name="name">
                        <label> Title : </label>
                        <input type="text" class="form-control" name="title">
                        <label>Contents : </label>
                        <textarea class="form-control" rows="5" style="resize: none" name="body"></textarea>
                        <br>
                        <button class="btn btn-success float-right btn-lg"> Send</button>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>

@endsection