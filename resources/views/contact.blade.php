@extends('layouts.main')


@section('meta')
<title>Contact Us | Boiler Installation UK</title>
<meta name="description" content="Get in touch with us for all your boiler installation, repair, plumbing, radiator installation, and pipe leak repair needs. We're your trusted heating solutions provider in the UK.">
<meta name="keywords" content="contact us, boiler installation, boiler repair, plumbing services, radiator installation, pipe leak repair, heating solutions, UK">
<meta name="author" content="Boiler Installation UK">

@endsection

@section('content')





<section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight">Contact</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>


@include('components.finance-available')
<section class="ls section_padding_100 background_cover page_contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                <div class="ds with_background transp_black_bg with_padding">

                    <form class="contact-form row" method="post" action="./">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <i class="fa fa-user highlight" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone Number
                                    <span class="required">*</span>
                                </label>
                                <i class="fa fa-phone highlight" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <i class="fa fa-envelope highlight" aria-hidden="true"></i>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Subject
                                    <span class="required">*</span>
                                </label>
                                <i class="fa fa-flag highlight" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-sm-12">

                            <div class="form-group">
                                <label for="message">Message</label>
                                <i class="fa fa-pencil highlight" aria-hidden="true"></i>
                                <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 bottommargin_0">

                            <div class="contact-form-submit topmargin_10">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color2 wide_button margin_0">Make appointment</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
