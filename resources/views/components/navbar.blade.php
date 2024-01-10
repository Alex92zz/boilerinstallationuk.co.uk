<!-- template sections -->

<section class="page_topline ds table_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 text-center text-sm-left">
                <p class="divided-content darklinks">
                    <span class="black">
                        Welcome to Boiler Installation UK based in Sandwell
                    </span>
                    <a href="tel:07440531320">07440 531320</a>
                    <span
                        id="obfuscated-email">&#105;&#110;&#102;&#111;&#64;&#98;&#111;&#105;&#108;&#101;&#114;&#105;&#110;&#115;&#116;&#97;&#108;&#108;&#97;&#116;&#105;&#111;&#110;&#117;&#107;&#46;&#99;&#111;&#46;&#117;&#107;</span>
                </p>
            </div>
            <div class="col-sm-4 text-center text-sm-right">

                <div class="page_social_icons">
                    <a class="social-icon soc-facebook" href="#" title="Facebook"></a>
                    <a class="social-icon soc-twitter" href="#" title="Twitter"></a>
                    <a class="social-icon soc-google" href="#" title="Google"></a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="page_toplogo table_section table_section_md ls section_padding_top_5 section_padding_bottom_5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center text-md-left">
                <a href="./" class="logo top_logo">
                    <img src="{{ asset('images/logo/logo-icon-red.webp') }}" width="60" alt="">
                    <span class="logo_text">
                        <span class="big">
                            Boiler Installation UK
                        </span>
                        <div class="divided-content">
                            <span class="small-text" style="color:#FA7B83"><strong>Covering The Midlands</strong>
                            </span>
                        </div>
                    </span>
                </a>

                <!-- header toggler -->
                <span class="toggle_menu">
                    <span></span>
                </span>
            </div>
            <div class="col-md-8 text-center text-md-right">

                <div class="inline-teasers-wrap">
                    <div class="media small-teaser">
                        <div class="media-left media-middle">
                            <div class="teaser_icon highlight size_normal">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <h6 class="weight-black text-uppercase bottommargin_5">
                                Call Us: <a href="tel:07440531320">07440 531320</a>
                            </h6>
                            <p class="small-text small lightgrey">
                                1 Wood Street, Tipton, DY4 9BQ
                            </p>
                        </div>
                    </div>

                    <div class="media small-teaser">
                        <div class="media-left media-middle">
                            <div class="teaser_icon highlight2 size_normal">
                                <i class="fa fa-clock-o" style="color:#FA7B8; background-color:#FA7B8"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <h6 class="weight-black text-uppercase bottommargin_5">
                                Opening Hours
                            </h6>
                            <p class="small-text small lightgrey">
                                Weekdays 8.00-20.00, Sat, Sun: 08:00 - 18:00
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<header class="page_header header_white toggler_left with_top_border">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 display_table">

                <div class="header_mainmenu display_table_cell">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>

                            </li>

                            <li>
                                <a href="{{ route('services') }}">Services</a>
                                <ul style="max-height: 300px; overflow-y:scroll;">
                                    <li>
                                        <a href="{{ route('boiler-installation') }}">Boiler Installation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('boiler-service') }}">Boiler Service</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('boiler-repair') }}">Boiler Repair</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof pages -->


                            <!-- Areas -->
                            <li >
                                <a href="{{ route('boilers') }}">Boilers</a>
                                <ul style="max-height: 300px; overflow-y:scroll;">
                                    @foreach ($boilers as $boiler)
                                    <li>
                                        <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}">{{ $boiler->name }}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>
                            <!-- eof Gallery -->

                            <!-- blog -->
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                                <ul>
                                    @foreach ($recentBlogPosts as $post)
                                        <li>
                                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                                                {{ $post->title }}
                                            </a>
                                        </li>
                                    @endforeach


                                </ul>
                            </li>
                            <!-- eof blog -->

                            <!-- contacts -->
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li>
                                <img  src="{{ asset('images/navbar/gas-safe-register-2.webp') }}"
                                    alt="Gas Safe Register Logo" width="50px" height="50px">
                            </li>
                            <li>
                                <img src="{{ asset('images/navbar/Worcester-logo.webp') }}"
                                    alt="Worcester Logo" width="100px" height="100px">
                            </li>
                            <li>
                                <img  src="{{ asset('images/navbar/vaillant.webp') }}" alt="Villant Logo"
                                    width="100px" height="100px">
                            </li>
                            <li>
                                <img  src="{{ asset('images/navbar/baxi.webp') }}" alt="Baxi Logo"
                                    width="100px" height="100px">
                            </li>

                        </ul>
                    </nav>
                    <!-- eof main nav -->
                    <!-- header toggler -->
                    <span class="toggle_menu">
                        <span></span>
                    </span>


                </div>
                <div class="header_right_buttons display_table_cell text-right">
                    <a href="tel:07440531320" class="theme_button color1 margin_0">Speak to a Boiler Expert</a>
                </div>

            </div>
        </div>
    </div>
</header>
