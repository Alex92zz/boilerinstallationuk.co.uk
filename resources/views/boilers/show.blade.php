@extends('layouts.main')


@section('meta')
<title>{{ $boiler->name }}</title>
<meta name="description" content="{{ $boiler->meta_description }}">
<meta name="author" content="Boiler Installation UK">
@endsection

@section('content')
<section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight">{{ $boiler->name }}</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Boilers</a>
                    </li>
                    <li class="active">Combi Boiler</li>
                </ol>
            </div>
        </div>
    </div>
</section>


@include('components.finance-available')


<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
    <div class="container">
        <div class="row">

            <div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-5 col-md-push-4 col-lg-push-3">

                <div class="with_border with_padding rounded">


                    <div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">

                        <div class="col-md-6">
                            <div class="images">



                                <a itemprop="image" class="woocommerce-main-image zoom" title="{{ $boiler->name }}" data-rel="prettyPhoto[product-gallery]">
                                    <img loading="lazy" src="{{ asset($boiler->image_1) }}" class="attachment-shop_single wp-post-image" alt="{{ $boiler->name }}">
                                </a>
                            </div>
                            <!--eof .images -->

                            <div class="thumbnails-wrap text-center" style="margin-top:20px;">
                                <div id="product-thumbnails" class="owl-carousel thumbnails product-thumbnails" data-loop="true" data-center="true" data-margin="10" data-nav="false" data-dots="true" data-items="3" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="2">

                                    <a href="{{ asset($boiler->image_1) }}" class="zoom first" title="{{ $boiler->name }}" data-gal="prettyPhoto[product-gallery]">
                                        <img loading="lazy" src="{{ asset($boiler->image_1) }}" class="attachment-shop_thumbnail" alt="{{ $boiler->name }}">
                                    </a>

                                    <a href="{{ asset($boiler->image_2) }}" class="zoom first" title="{{ $boiler->name }}" data-gal="prettyPhoto[product-gallery]">
                                        <img loading="lazy" src="{{ asset($boiler->image_2) }}" class="attachment-shop_thumbnail" alt="{{ $boiler->name }}">
                                    </a>

                                    <a href="{{ asset($boiler->image_3) }}" class="zoom first" title="{{ $boiler->name}}" data-gal="prettyPhoto[product-gallery]">
                                        <img loading="lazy" src="{{ asset($boiler->image_3) }}" class="attachment-shop_thumbnail" alt="{{ $boiler->name }}">
                                    </a>

                                    <a class="zoom first" title="{{ $boiler->name}}" data-gal="prettyPhoto[product-gallery]">
                                        <img loading="lazy" src="{{ asset($boiler->image_3) }}" class="attachment-shop_thumbnail" alt="{{ $boiler->name }}">
                                    </a>
                                </div>

                            </div>
                            <!-- eof .images -->
                        </div>

                        <div class="summary entry-summary col-md-6">

                            <h1 itemprop="name" class="product_title entry-title">{{ $boiler->name }}</h1>

                            <div class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">

                                <div class="star-rating" title="Rated 4.50 out of 5">
                                    <span style="width:90%">
                                        <strong class="rating">Boiler including installation, only £{{ $boiler->price }}</strong>
                                    </span>
                                </div>

                            </div>

                            <div class="product_meta">
                                <span class="posted_in">
                                    <span class="grey">Categories:</span>
                                    <span class="categories-links small-text">
                                        Combi Boiler
                                    </span>
                                </span>
                            </div>

                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                                <div itemprop="description">
                                    <p>
                                        {{ $boiler->main_description }}
                                    </p>
                                </div>

                                <ul class="list1 no-bullets">
                                    <li>
                                        <p class="price">
                                            <del>
                                                <span class="amount"></span>
                                            </del>
                                            <ins>
                                                <span class="amount">Only £{{ $boiler->price }} Installation Included!</span>
                                            </ins>
                                        </p>

                                        <meta itemprop="price" content="2">
                                    </li>
                                </ul>
                            </div>


                        </div>
                        <!-- .summary.col- -->

                    </div>
                    <!-- .product.row -->


                </div>
                <!-- .with_background -->


                <div class="woocommerce-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs wc-tabs" role="tablist">
                        <li class="active"><a href="#details_tab" role="tab" data-toggle="tab">Description</a></li>
                        <li><a href="#additional_tab" role="tab" data-toggle="tab">Specifications</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content top-color-border">
                        <div class="tab-pane fade in active" id="details_tab">
                            <p>
                                {{ $boiler->secondary_description }}
                            </p>
                            <ul class="list2 darklinks">
                                <li>{{ $boiler->spec_1 }}</li>
                                <li>{{ $boiler->spec_2 }}</li>
                                <li>{{ $boiler->spec_3 }}</li>
                                <li>{{ $boiler->spec_4 }}</li>
                                <li>{{ $boiler->spec_5 }}</li>
                            </ul>
                            <div class="well">
                                Thank you for considering the {{ $boiler->name }}! As a dedicated provider and installer, I'm here to assist you with personalized boiler replacement services. Please don't hesitate to contact me for more information and a tailored quote to meet your specific requirements.
                            </div>

                        </div>

                        <div class="tab-pane fade" id="additional_tab">
                            <table class="table table-striped topmargin_30">
                                <tr>
                                    <th class="grey">Brand:</th>
                                    <td>{{ $boiler->brand }}</td>
                                </tr>
                                <tr>
                                    <th class="grey">Boiler dimensions:</th>
                                    <td>{{ $boiler->dimensions }}</td>
                                </tr>
                                <tr>
                                    <th class="grey">DHW flow rate:</th>
                                    <td>{{ $boiler->flow_rate }}</td>
                                </tr>
                                <tr>
                                    <th class="grey">ErP rating heating:</th>
                                    <td>{{ $boiler->ErP_rating_heating }}</td>
                                </tr>
                                <tr>
                                    <th class="grey">ErP rating DHW:</th>
                                    <td>{{ $boiler->ErP_rating_DHW }}</td>
                                </tr>
                                <tr>
                                    <th class="grey">ErP efficiency:</th>
                                    <td>{{ $boiler->ErP_efficiency }}</td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{ route('contact')}}"><button>Get in Touch</button></a>
                    </div>
                    <!-- eof .tab-content -->
                </div>
                <!-- .woocommerce-tabs -->


            </div>
            <!--eof .col-sm-8 (main content)-->


            @include('components.boiler-page-side-bar', ['boilers' => $boilers, 'recentPosts' => $recentPosts])



        </div>
    </div>
</section>
@endsection
