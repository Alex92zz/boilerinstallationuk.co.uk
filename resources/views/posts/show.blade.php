@extends('layouts.main')


@section('meta')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->description }}">
    <meta name="keywords" content="{{ $post->keywords }}">
    <meta name="author" content="Boiler Installation UK">
@endsection


@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">{{ $post->title }}</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('blog') }}">Blog</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-7 col-md-8 col-lg-8">

                    <article
                        class="single-post vertical-item content-padding big-padding post with_border rounded overflow-hidden">
                        <div class="entry-thumbnail item-media">

                            @if (!empty($post->thumbnail))
                                @php
                                    $imageUrl = asset($post->thumbnail);
                                @endphp
                                <img loading="lazy" src="{{ $imageUrl }}" alt="{{ $post->title }}">
                            @else
                                <img loading="lazy"
                                    src="{{ asset('images/blog-images/boiler-6.jpg') }}"
                                    alt="{{ $post->title }}">
                            @endif
                        </div>
                        <div class="item-content">


                            <header class="entry-header">

                                <p class="content-justify item-meta">

                                    <span class="entry-date colorlinks">
                                    </span>
                                </p>

                                <h3 class=" topmargin_0">
                                    {{ $post->title }}
                                </h3>

                            </header>
                            <!-- .entry-header -->

                            <div class="entry-content">

                                <p>{!! $post->content !!}</p>

                                <div class="text-center">
                                    <a href="tel:07440531320" class="theme_button wide_button color1 text-center">SPEAK TO A BOILER EXPERT</a>

                                </div>



                            </div>
                            <!-- .entry-content -->

                        </div>
                        <!-- .item-content -->

                    </article>



                </div>
                <!--eof .col-sm-8 (main content)-->


                <!------------------------------------------------ Start Side Bar Section ------------------------------------------>

                @include('components.blog-page-sidebar')

                <!------------------------------------------------ End Side Bar section ------------------------------------------>

            </div>
        </div>
    </section>

    
@endsection
