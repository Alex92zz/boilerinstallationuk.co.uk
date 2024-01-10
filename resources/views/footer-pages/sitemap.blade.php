@extends('layouts.main')


@section('meta')
    <title>Sitemap | Boiler Installation UK</title>
    <meta name="description"
        content="Explore the sitemap of MINT Commercial Ltd website to navigate through our services, pages, and content efficiently.">
    <meta name="keywords" content="sitemap, MINT Commercial Ltd, website navigation, services, pages, content">
    <meta name="author" content="MINT Commercial Ltd">
@endsection



@section('content')
    <div class="container">
        <div class="row mt-60">
            <h4>MINT Commercial Sitemap</h4>
            <p>
                Discover top-notch commercial cleaning services for your business! We offer Window Cleaning, Gutter
                Cleaning, Commercial Guttering, and Pressure Washing solutions. Find what you need on our sitemap page and
                make your space shine!
                Navigating our sitemap is a breeze, designed to streamline your search for specific content on our website.
                We've organized it carefully to provide a user-friendly experience, ensuring you can easily find what you're
                looking for.
            </p>
            <p>
                Thank you for choosing MINT Commercial Ltd as your trusted partner for commercial cleaning needs. If you
                have any questions or need further assistance, our friendly team is here to help. Let us help you create a
                spotless and welcoming environment that leaves a lasting impression on your clients and employees alike.
            </p>
        </div>

        <div class="row mx-auto">
            <div class="col-lg-4 col-sm-6">
                <h4>Homepage links</h4>
                <div class="sitemap-widget">
                    <ul class="list-wrap">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="/commercial-cleaning-services">Services</a></li>
                        <li><a href="{{ url('/why-us') }}">Why Us?</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/careers') }}">Careers</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mx-auto">
            <h3 class="mx-auto text-center">Blog Posts Links</h3>
            @foreach ($blogPosts as $post)
                <div class="col-lg-4 col-sm-6">
                    <div class="sitemap-widget">
                        <ul class="list-wrap">
                            <li>
                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="row mx-auto">
            <h3 class="mx-auto text-center mt-60 mb-40">Areas We Serve Links</h3>
            @foreach ($localSeoPostsByCategory as $category => $localSeoPostsByCategory)
                <div class="col-lg-4 col-sm-6">
                    <h4>{{ $category }}</h4>
                    <div class="sitemap-widget">
                        <ul class="list-wrap">
                            @foreach ($localSeoPostsByCategory as $post)
                                <li><a href="{{ route('localSEO.show', $post->slug) }}">{{ $post->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
