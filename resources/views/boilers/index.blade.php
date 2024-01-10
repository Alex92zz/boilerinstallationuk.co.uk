@extends('layouts.main')


@section('meta')
    <title>Boilers Page | Boiler Installation UK</title>
    <meta name="description" content=" ">
    <meta name="keywords" content="">
    <meta name="author" content="Boiler Installation UK">
@endsection


@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Boilers Page</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('boilers') }}">Boilers</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>

    @include('components.finance-available')


    <section class="ls ms section_padding_top_100 section_padding_bottom_75 columns_padding_50 columns_margin_bottom_30" id="boilers">
        <div class="container">
            <div class="row">
               @foreach ($boilers as $boiler)
               <div class=" teaser-div col-md-4 col-sm-6 to_animate" data-animation="pullUp">
                <div class="teaser text-center">
                    <img loading="lazy" src="{{ asset($boiler->image_1) }}" alt="{{ $boiler->name }}">
                    <h4 class="poppins hover-color2 highlight" style="min-height: 40px;">
                        <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}">{{ $boiler->name }}</a>
                    </h4>
                    
                    <p>
                        {{ $boiler->secondary_description }}
                    </p>
                    <span class="price">
                        <del>
                            <span class="amount"></span>
                        </del>
                        <ins>
                            <span class="amount" style="color:black">Only £{{ $boiler->price }} Installation Included!</span>
                        </ins>
                    </span>
                    <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}"><button>View Boiler</button></a>

                </div>
            </div>
               @endforeach
            
            </div>
        </div>
    </section>


@endsection
