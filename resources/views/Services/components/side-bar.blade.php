
                        <!-- sidebar -->
                        <aside class="col-sm-5 col-md-3 col-lg-3">

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
                                        <a href="tel:07440531320" class="theme_button color1 margin_0">SPEAK TO A BOILER EXPERT</a>
                                        <!-- <a href="shop-checkout-right.html" class="theme_button">Checkout</a> -->
                                    </p>
                    
                                </div>
                            </div>

                            <div class="panel panel-default" style="margin-top:60px;">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse1">
                                Our Services
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list2 darklinks">
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
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse2">
                                Areas We Cover
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list2 darklinks">
                                            @foreach($localSEOPages as $localSEO)
                                            <li>
                                                <a href="{{ $localSEO->slug }}">{{ $localSEO->category }} in {{ $localSEO->location }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse3">
                                From The Blog
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list2 darklinks">
                                            @foreach($recentPosts as $recentPost)
                                            <li>
                                                <a href="{{ route('posts.show', ['slug' => $recentPost->slug]) }}">{{ $recentPost->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="widget widget_apsc_widget">
                                <h3 class="widget-title poppins">Get In Touch</h3>
                                <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                    <div class="apsc-each-profile">
                                        <a class="apsc-facebook-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="fa fa-facebook apsc-facebook"></i>
                                                    <span class="media-name">Facebook</span>
                                                </span>
                                               
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-twitter-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="fa fa-twitter apsc-twitter"></i>
                                                    <span class="media-name">Twitter</span>
                                                </span>
                                               
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-google-plus-icon clearfix" href="https://g.co/kgs/wNncmyR">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-googlePlus fa fa-google-plus"></i>
                                                    <span class="media-name">google+</span>
                                                </span>
                                              
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-instagram-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-instagram fa fa-instagram"></i>
                                                    <span class="media-name">Instagram</span>
                                                </span>
                                              
                                            </div>
                                        </a>
                                    </div>

                                </div>

                            </div>
                            


                        </aside>
                        <!-- eof aside sidebar -->