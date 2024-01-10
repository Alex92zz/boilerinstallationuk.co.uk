
                        <!-- sidebar -->
                        <aside class="col-sm-5 col-md-4 col-lg-3 col-sm-pull-7 col-md-pull-8 col-lg-pull-9">

                            <div class="widget widget_shopping_cart">

                                <h3 class="widget-title poppins">Compact &amp; Combi Boilers</h3>
                                <strong class="rating">All prices shown include installation.</strong>

                                <div class="widget_shopping_cart_content">

                                    <ul class="cart_list product_list_widget media-list darklinks">
                                        @foreach ($boilers as $boiler)
                                        <li class="media">
                                            <div class="media-left media-middle">
                                                <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}">
                                                    <img loading="lazy" src="{{ asset($boiler->image_1) }}" class="with_background" alt="{{ $boiler->name}}">
                                                </a>
                                            </div>

                                            <div class="media-body media-middle">
                                                <h4>
                                                    <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}">{{ $boiler->name}}</a>
                                                </h4>
                                                <span class="quantity bold">
                                                    <span class="amount highlight">£{{ $boiler->price }}</span>
                                                </span>
                                            </div>
                                        </li>
                                        @endforeach


                                    </ul>
                                    <!-- end product list -->

                                    <p class="buttons topmargin_40">
                                        <a href="{{ route('contact') }}" class="theme_button color1 margin_0">Book Installation</a>
                                        <!-- <a href="shop-checkout-right.html" class="theme_button">Checkout</a> -->
                                    </p>

                                </div>
                            </div>

                            <div class="widget widget_tabs widget_theme_post_tabs half-tabs">

                                <h3 class="widget-title poppins">From the Blog</h3>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#widget-tab4" role="tab" data-toggle="tab">Recent Posts</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content top-color-border">


                                    <div class="tab-pane fade in active" id="widget-tab4">
                                        <ul class="cart_list product_list_widget media-list darklinks">
                                            @foreach ($recentPosts as $recentPost)
                                            <li class="media">
                                                <div class="media-body media-middle">
                                                    <a href="{{ route('posts.show', ['slug' => $recentPost->slug]) }}"><strong class="rating">{{ $recentPost->title }}</strong></a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- eof tab -->
                                    
                                </div>
                                <!-- eof tab-content -->

                            </div>
                            <!-- eof widget -->


                        </aside>
                        <!-- eof aside sidebar -->
