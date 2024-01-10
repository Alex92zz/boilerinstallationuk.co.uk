@extends('layouts.main')

@section('meta')
<title>{{ $post->title }} | Boiler Installation UK</title>
<meta name="description" content="{{ $post->page_description }}">
<meta name="author" content="Boiler Installation UK">



@endsection

@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">{{ $post->category }} in {{ $post->location }}</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ $post->slug }}">{{ $post->title }}</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>

    @include('components.finance-available')

    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">

            <div class="row">

                @include('services.components.side-bar')

                <div class="col-sm-9">
                    <article>

                        <h1 class="gallery-single-title">
                            {{ $post->title }}
                        </h1>
                        <img loading="lazy" style="max-width:400px; padding:15px; margin: 0 auto;" src="images/service/boiler-installation/multiple-gas-boilers-photo.jpg" alt="Multiple gas boilers in {{ $post->location }}">
                        {!! $post->about_us_paragraph !!}
                    

                    </article>

                </div>

            </div>
        </div>
    </section>
@endsection
