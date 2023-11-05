<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="home-slide-cover mt-30">
            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
              @if ($banners)
              @foreach ($banners as $banner )
              <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('assets/images')}}/{{ $banner->banner }})">
                <div class="slider-content">
                    <h1 class="display-2 mb-40">
                       {!! $banner->title !!}
                    </h1>

                </div>
            </div>
              @endforeach

              @else
              <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('assets/images/slider-1.png')}})">
                <div class="slider-content">
                    <h1 class="display-2 mb-40">
                        Don’t miss amazing<br />
                        grocery deals
                    </h1>

                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('assets/images/slider-2.png')}})">
                <div class="slider-content">
                    <h1 class="display-2 mb-40">
                        Fresh Vegetables<br />
                        Big discount
                    </h1>

                </div>
            </div>

              @endif
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>
    </div>
</section>
