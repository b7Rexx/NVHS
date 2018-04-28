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
                <div class="col-md-6">
                    <br>
                    <hr>
                    <h1 class="text-center">MAIL</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>

@endsection