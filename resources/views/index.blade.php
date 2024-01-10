@extends('layouts.main')


@section('meta')
<title>Boiler Installation UK</title>
<meta name="description" content="Experience excellence in boiler installation, repair, and plumbing services. Trust us for heating solutions in the UK.">
<meta name="keywords" content="boiler installation, boiler repair, plumbing services, radiator installation, pipe leak repair, heating solutions, UK">
<meta name="author" content="Boiler Installation UK">
@endsection

@section('content')
    @include('components.mainslider')
    @include('components.finance-available')

    @include('components.home-page-boilers', ['boilers' => $boilers])


    <section class="ls ms overflow_hidden half_section section_padding_top_50 section_padding_bottom_50 columns_padding_80">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 to_animate" data-animation="fadeInRight">

                    <h4 class="thin">Heating, Plumbing &amp; Air Conditioning</h4>
                    <h2 class="section_header big">
                        Small Business, Small Prices
                    </h2>
                    <p>
                        Welcome to Boiler Installation UK, your trusted source for professional heating and plumbing
                        solutions. Our team of qualified boiler engineers is committed to delivering top-notch services
                        tailored to the needs of homeowners and businesses alike.
                    </p>
                    <p>
                        What distinguishes us in the industry is our direct approach – we work closely with our clients,
                        eliminating intermediaries, and thereby offering competitive prices without compromising on quality.
                        At Boiler Installation UK, we take immense pride in our work, ensuring that every installation
                        adheres to the highest standards and complies with all safety regulations.
                    </p>
                    <p>
                        Our unwavering dedication to customer satisfaction drives us to provide a friendly and dependable
                        service that consistently surpasses your expectations. Whether you require a new boiler
                        installation, boiler repair, radiator installation, or plumbing services, Boiler Installation UK is
                        your dependable partner for all your heating and plumbing needs.
                    </p>
                    <p>Thank you for considering our services, and we eagerly anticipate the opportunity to serve you.
                        Please don't hesitate to reach out to us soon.</p>
                    <div class="inline-teasers-wrap">
                        <div class="inline-block">
                            <ul class="list2 regular grey margin_0">
                                <li>Expert Boiler Installations</li>
                                <li>Boiler Service & Gas Safety Certification</li>
                                <li>Swift and Reliable Boiler Repairs</li>
                                <li>Efficient Radiator Installations</li>

                            </ul>
                        </div>
                        <div class="media small-teaser inline-block bottommargin_15">
                            <div class="media-left ">
                                <i class="fa fa-phone highlight size_small" aria-hidden="true"></i>
                            </div>
                            <div class="media-body fontsize_20 medium grey toppadding_5">
                                <a href="tel:07440531320" style="color:#323232"> 07440 531320</a>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    <img loading="lazy" src="images/home-page/boiler-1.webp" alt="Boiler Replacement Worcester Bosch">
                </div>
                <!-- .col-* -->

            </div>
        </div>
    </section>


    <section class="ls ms overflow_hidden half_section section_padding_top_50 section_padding_bottom_50 columns_padding_80">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <img loading="lazy" src="images/home-page/boiler-2.webp" alt="Boiler Installation">
                </div>
                <!-- .col-* -->

                <div class="col-md-6 to_animate" data-animation="fadeInRight">

                    <h2 class="section_header highlight2">
                        Heating Services
                    </h2>

                    <div class="media big-left-media lineheight-thin">
                        <div class="media-left media-middle">

                        </div>
                        <div class="media-body media-middle">
                            <h4>Precision Heating Installations and Repairs</h4>
                            <p>
                                At Boiler Installation UK, we specialize in precision heating system services designed to meet the needs of your home or business. Our expert team ensures that your heating system is installed or repaired with the utmost professionalism, guaranteeing efficient and enduring performance.
                            </p>
                        </div>
                    </div>

                    <div class="media big-left-media lineheight-thin">
                        <div class="media-left media-middle">

                        </div>
                        <div class="media-body media-middle">
                            <h4>Boiler Service &amp; Gas Safety Certification

                            </h4>
                            <p>
                                Our boiler service and gas safety certification package deliver thorough inspections and maintenance to ensure the seamless operation of your boiler while prioritizing the safety of your home against potential gas hazards.
                            </p>
                        </div>
                    </div>

                    <div class="media big-left-media lineheight-thin">
                        <div class="media-left media-middle">

                        </div>
                        <div class="media-body media-middle">
                            <h4>24/7 emergency heating repairs</h4>
                            <p>
                                We understand that heating emergencies can occur at any time, especially during the coldest months. That's why our round-the-clock heating repair services are here for you. Our team is available 24/7 to swiftly diagnose and resolve issues, ranging from minor repairs to complete system replacements, ensuring your home remains comfortably warm.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- .col-* -->

            </div>
        </div>
    </section>

    <section id="services"
        class="ls ms overflow_hidden half_section section_padding_top_50 section_padding_bottom_50 columns_padding_80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 to_animate" data-animation="fadeInLeft">

                    <h2 class="section_header highlight2">
                        Plumbing Services
                    </h2>

                    <div class="media big-left-media lineheight-thin">
                        <div class="media-left media-middle">

                        </div>
                        <div class="media-body media-middle">
                            <h4>Comprehensive Plumbing Solutions

                            </h4>
                            <p>
                                At Boiler Installation UK, we are your trusted source for comprehensive plumbing services, addressing a wide spectrum of plumbing concerns. From pesky clogged drains and troublesome leaky faucets to substantial sewer line repairs and water heater installations, our expert plumbers are equipped to handle it all.

                            </p>
                        </div>
                    </div>

                    <div class="media big-left-media lineheight-thin">
                        <div class="media-left media-middle">

                        </div>
                        <div class="media-body media-middle">
                            <h4>Precision Installations for Lasting Performance</h4>
                            <p>
                                Our team specializes in expert plumbing installations for various fixtures and appliances. We ensure that every installation is carried out with precision, guaranteeing not only the proper setup but also long-term functionality for your plumbing system.

                            </p>
                        </div>
                    </div>

                    <div class="media big-left-media lineheight-thin">
                        <div class="media-left media-middle">

                        </div>
                        <div class="media-body media-middle">
                            <h4>24/7 emergency plumbing services.</h4>
                            <p>
                                Plumbing emergencies can strike at the most inconvenient times. Rest assured that Boiler Installation UK is at your service 24/7, ready to promptly and reliably address your plumbing emergencies, regardless of the hour or day. Don't hesitate to call us for immediate assistance.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- .col-* -->

                <div class="col-md-6">
                    <img loading="lazy" src="images/home-page/radiator-1.webp" alt="Radiator replacement">
                </div>
                <!-- .col-* -->


            </div>
        </div>
    </section>


    @include('components/home-page-blog-area', ['recentPosts' => $recentPosts])


    @include('components/testimonials')




    <section id="faq" class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">
                        FAQ
                    </h2>
                    <p class="underheading">Frequently Asked Questions</p>
                </div>
            </div>
            <div class="row columns_margin_top_60 to_animate" data-animation="fadeInUp">
                <div class="col-md-4">
                    <div class="teaser with_border rounded text-center lineheight_thin">
                        <div class="teaser_icon main_bg_color2 round offset_icon size_small">
                            <span class="weight-black">?</span>
                        </div>
                        <h4 class="poppins">
                            What types of boilers do you install and replace?
                        </h4>
                        <p>
                        Boiler Installation UK provides a wide range of installation and replacement services, including combi, system, and conventional boilers from reputable brands. We prioritize your property's unique requirements, ensuring the chosen boiler aligns with your heating needs, energy efficiency goals, and budget. Our experienced team guides you through the selection process, ensuring your immediate and long-term heating needs are met with precision and satisfaction.  
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teaser with_border rounded text-center lineheight_thin">
                        <div class="teaser_icon main_bg_color2 round offset_icon size_small">
                            <span class="weight-black">?</span>
                        </div>
                        <h4 class="poppins">
                            How much does a typical boiler installation cost?
                        </h4>
                        <p>
                            The cost of a boiler installation can vary significantly depending on several factors. These factors include the type of boiler selected, the size and layout of your property, any additional components or services required (such as radiators or thermostat upgrades), and the complexity of the installation. To provide you with an accurate cost estimate, we offer free, no-obligation assessments. Our team will evaluate your specific needs and provide you with a transparent, competitive quote tailored to your project's requirements.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teaser with_border rounded text-center lineheight_thin">
                        <div class="teaser_icon main_bg_color2 round offset_icon size_small">
                            <span class="weight-black">?</span>
                        </div>
                        <h4 class="poppins">
                            Do you offer financing options for boiler installations?
                        </h4>
                        <p>
                            Yes, we understand that investing in a new boiler can be a significant financial commitment. To make it more accessible, we offer financing options to spread the cost over manageable monthly payments. We'll work with you to find a financing plan that aligns with your budget and ensures you can enjoy the benefits of a new, efficient boiler without undue financial strain. Contact us for further details on our financing options.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row columns_margin_top_60 to_animate" data-animation="fadeInUp">
                <div class="col-md-4">
                    <div class="teaser with_border rounded text-center lineheight_thin">
                        <div class="teaser_icon main_bg_color2 round offset_icon size_small">
                            <span class="weight-black">?</span>
                        </div>
                        <h4 class="poppins">
                            What is included in your boiler service and gas safety certificate package?
                        </h4>
                        <p>
                            Our comprehensive boiler service & gas safety package is designed to maintain your boiler's peak condition while prioritizing your home's safety. This inclusive package comprises a thorough inspection, meticulous cleaning, regular maintenance, and rigorous safety checks aimed at preventing potential gas hazards. Opting for our package guarantees not only efficient heating but also the utmost safety for your family and property, ensuring complete peace of mind.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teaser with_border rounded text-center lineheight_thin">
                        <div class="teaser_icon main_bg_color2 round offset_icon size_small">
                            <span class="weight-black">?</span>
                        </div>
                        <h4 class="poppins">
                            Are your engineers qualified and certified for boiler installations and repairs?
                        </h4>
                        <p>
                            We offer 24/7 emergency boiler repair services to provide swift assistance when you need it most. Whether it's a sudden breakdown, a loss of heating during the coldest months, or any other boiler-related emergency, you can count on our team to respond promptly. Simply give us a call anytime, day or night, and we'll dispatch our experts to diagnose and resolve the issue efficiently.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teaser with_border rounded text-center lineheight_thin">
                        <div class="teaser_icon main_bg_color2 round offset_icon size_small">
                            <span class="weight-black">?</span>
                        </div>
                        <h4 class="poppins">
                            What should I do in case of a boiler emergency outside of regular business hours?
                        </h4>
                        <p>
                            We offer 24/7 emergency boiler repair services to provide swift assistance when you need it most. Whether it's a sudden breakdown, a loss of heating during the coldest months, or any other boiler-related emergency, you can count on our team to respond promptly. Simply give us a call anytime, day or night, and we'll dispatch our experts to diagnose and resolve the issue efficiently.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row topmargin_30 to_animate" data-animation="fadeInUp">
                <div class="col-sm-12 text-center">
                    <a href="contact" class="theme_button color1 wide_button">Book Installation</a>
                </div>
            </div>
        </div>
    </section>
@endsection
