@extends('layouts.main')


@section('meta')
<title>Services | Boiler Installation UK</title>
<meta name="description" content="Explore our comprehensive range of services, including boiler installation, repair, plumbing, radiator installation, and pipe leak repair. We are your trusted heating solutions provider in the UK.">
<meta name="keywords" content="boiler installation, boiler repair, plumbing services, radiator installation, pipe leak repair, heating solutions, UK">
<meta name="author" content="Boiler Installation UK">

@endsection

@section('content')




    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Services</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

        @include('components.finance-available')

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">

            <!------------------------------------------ Start of Boiler Section ------------------------------------------>






            <div class="row">
                <div class="col-sm-12 text-center">
                </div>
            </div>
            <div class="row columns_margin_bottom_20 to_animate animated fadeInUp" data-animation="fadeInUp">


                <!------------------------------------------ Start of Article ------------------------------------------>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/services-page/boiler-installation.jpg" alt="Boiler Installation">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                Boiler Installation
                            </h4>
                            <p>
                                Experience excellence in boiler installation. Our skilled team ensures efficient, safe, and reliable boiler installations for your peace of mind.
                            </p>
                            <p class="colorlinks small-text">
                                <a href="{{ route('boiler-installation') }}">Boiler Installation</a>
                            </p>
                        </div>
                    </article>
                </div>
                <!------------------------------------------ End of Article ------------------------------------------>



                <!------------------------------------------ Start of Article ------------------------------------------>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/services-page/boiler-service.jpg" alt="Boiler Service">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                Boiler Service
                            </h4>
                            <p>
                                Trust us for top-notch boiler service. We maintain, repair, and optimize boilers for peak performance and lasting reliability.
                            </p>
                            <p class="colorlinks small-text">
                                <a href="{{ route('boiler-service') }}">Boiler Service</a>
                            </p>
                        </div>
                    </article>
                </div>
                <!------------------------------------------ End of Article ------------------------------------------>

                <!------------------------------------------ Start of Article ------------------------------------------>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/services-page/boiler-repair.jpg" alt="Boiler Repair">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                Boiler Repairs
                            </h4>
                            <p>
                                Depend on us for swift, expert boiler repairs. Our dedicated team restores your boiler's functionality promptly and efficiently.
                            </p>
                            <p class="colorlinks small-text">
                                <a href="{{ route('boiler-repair') }}">Boiler Repair</a>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <!------------------------------------------ End of Article ------------------------------------------>



            <!------------------------------------------ Start of Radiator Section ------------------------------------------>





            <div class="row topmargin_60">
                <div class="col-sm-12 text-center">
                </div>
            </div>
            <div class="row columns_margin_bottom_20 to_animate animated fadeInUp" data-animation="fadeInUp">

                <!------------------------------------------ Start of Article ------------------------------------------>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/services-page/radiator-installation.jpg" alt="Radiator Installation">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                New Radiator Installation
                            </h4>
                            <p>
                                Discover quality in new radiator installation. Our experts provide efficient and precise installations for improved heating and energy efficiency.
                            </p>
                            <p class="highlightlinks small-text">
                                <a href="tel:07440531320">Get In Touch</a>
                            </p>
                        </div>
                    </article>
                </div>
                <!------------------------------------------ End of Article ------------------------------------------>

                <!------------------------------------------ Start of Article ------------------------------------------>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/services-page/plumbing-repair.jpg" alt="Plumbing Repairs">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                Plumbing Installation and repair
                            </h4>
                            <p>
                                Elevate your plumbing with our installation and repair services. Our skilled team ensures reliability, efficiency, and lasting performance.
                            </p>
                            <p class="highlightlinks small-text">
                                <a href="tel:07440531320">Get In Touch</a>
                            </p>
                        </div>
                    </article>
                </div>
                <!------------------------------------------ End of Article ------------------------------------------>

                <!------------------------------------------ Start of Article ------------------------------------------>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/services-page/pipe-leaks-repar.jpg" alt="Pipe Leaks Repair">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                Pipe leaks repair
                            </h4>
                            <p>
                                Swift and dependable pipe leak repair. We fix leaks efficiently, preventing damage and ensuring a reliable plumbing system.
                            </p>
                            <p class="highlightlinks small-text">
                                <a href="tel:07440531320">Get In Touch</a>
                            </p>
                        </div>
                    </article>
                </div>
                <!------------------------------------------ End of Article ------------------------------------------>
            </div>







        </div>
    </section>
@endsection
