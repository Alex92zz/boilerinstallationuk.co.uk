@extends('layouts.main')


@section('meta')
<title>Blog Page | Boiler Installation UK</title>
<meta name="description" content="Explore our informative blog articles on boiler installation, repair, plumbing, and heating solutions. Stay updated with expert insights in the UK heating industry.">
<meta name="keywords" content="blog, boiler installation, boiler repair, plumbing, heating solutions, UK">
<meta name="author" content="Boiler Installation UK">

@endsection


@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Blog Page</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">Blog</a>
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

                    <!------------------------------------------------ Blog Article Start ------------------------------------------------>
                    @foreach ($posts->reverse() as $post)
                        <article class="post format-small-image with_border rounded overflow-hidden">

                            <div class="side-item content-padding">

                                <div class="row">

                                    <div class="col-md-5">
                                        <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                                            <div class="item-media entry-thumbnail">
                                                <img loading="lazy" src="{{ asset($post->thumbnail) }}""
                                                    alt="{{ $post->title }}">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="item-content">

                                            <p class="content-justify item-meta">

                                                <span class="entry-date colorlinks">
                                                    <a href="{{ $post->title }}"
                                                        rel="bookmark">
                                                    </a>
                                                </span>
                                            </p>

                                            <h4 class="entry-title">
                                                <a href="The-Top-Benefits-of-Upgrading-to-a-New-Boiler-for-Your-Home"
                                                    rel="bookmark">{{ $post->title }}</a>
                                            </h4> 
                                            <span>Posted: {{ $post->updated_at->diffForHumans() . '  '}}   By: Alex Tamas</span>
                                    


                                            <!-- .entry-meta -->

                                            <p>
                                                {!! \Illuminate\Support\Str::limit(strip_tags($post->content), 100) !!}
                                            </p>

                                           
                                            <a  href="{{ route('posts.show', ['slug' => $post->slug]) }}"
                                                class="theme_button" style="font-size:15px; padding:10px;">Read article</a>


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </article>
                        <!------------------------------------------------ Blog Article End ------------------------------------------------>
                    @endforeach



                </div>
                <!--eof .col-sm-8 (main content)-->


                <!------------------------------------------------ Start Side Bar Section ------------------------------------------>

                @include('components.blog-page-sidebar')

            </div>
        </div>
    </section>
@endsection
