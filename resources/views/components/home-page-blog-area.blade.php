<section id="news" class="ls section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header">
                   Recent Blog Posts
                </h2>

            </div>
        </div>
        <div class="row columns_margin_bottom_20 to_animate" data-animation="fadeInUp">

            @foreach ($recentPosts as $recentPost)
            <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                <article class="vertical-item content-padding with_border text-center rounded overflow-hidden">
                    <div class="item-media">
                        <img loading="lazy" src="{{ asset($recentPost->thumbnail) }}" alt="{{ $recentPost->title }}">
                        <div class="media-links">
                            <a href="{{ route('posts.show', ['slug' => $recentPost->slug]) }}" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title">
                            {{ $recentPost->title }}
                        </h4>
                        <span>Posted: {{ $recentPost->updated_at->diffForHumans() . '  '}}   By: Alex Tamas</span>
                        <p>
                            {!! \Illuminate\Support\Str::limit(strip_tags($recentPost->content), 100) !!}
                        </p>
                        <p class="colorlinks small-text">
                            <a href="{{ route('posts.show', ['slug' => $recentPost->slug]) }}">{{ $recentPost->title }}</a>
                        </p>
                    </div>
                </article>
            </div>
            @endforeach
            
        </div>
        <div class="row topmargin_30 to_animate" data-animation="fadeInUp">
            <div class="col-sm-12 text-center">
                <a href="{{ route('blog') }}" class="theme_button wide_button color1">Blog Page</a>
            </div>
        </div>
    </div>
</section>
