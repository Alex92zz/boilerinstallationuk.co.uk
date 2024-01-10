



<section class="ls ms section_padding_top_100 section_padding_bottom_75 columns_padding_50 columns_margin_bottom_30" id="boilers">
    <div class="container">
        <div class="row">
           @foreach ($boilers as $boiler)
           <div class=" teaser-div col-md-4 col-sm-6 to_animate" data-animation="pullUp">
            <div class="teaser text-center">
                <img loading="lazy" src="{{ asset($boiler->image_1) }}" alt="{{ $boiler->name }}">
                <h4 class="poppins hover-color2 highlight" style="min-height: 40px;">
                    <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}">{{ $boiler->name }}</a>
                </h4>
                
                <p>
                    {{ $boiler->secondary_description }}
                </p>
                <span class="price">
                    <del>
                        <span class="amount"></span>
                    </del>
                    <ins>
                        <span class="amount" style="color:black">Only £{{ $boiler->price }} Installation Included!</span>
                    </ins>
                </span>
                <a href="{{ route('boilers.show', ['slug' => $boiler->slug]) }}" class="theme_button color1">View Boiler</a>

            </div>
        </div>
           @endforeach
           <div class="row topmargin_30 to_animate" data-animation="fadeInUp">
            <div class="col-sm-12 text-center">
                <a href="{{ route('boilers') }}" class="theme_button color1 wide_button">View All Boilers</a>
            </div>
        </div>
        </div>
    </div>
</section>
