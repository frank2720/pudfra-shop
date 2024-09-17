@extends('layouts.main')
@section('title')
    {{__('About Us')}}
@endsection
@section('content')

<style>

</style>


<section class="about-section">
  <div class="container">
      <div class="row clearfix">
          
            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
              <div class="inner-column">
                  <div class="sec-title">
                    <div class="title">About Us</div>
                      <h2>We Are The Leader In <br> The Interiores</h2>
                    </div>
                    <div class="text">
                      Maanar Shop is your one-stop destination for high-quality, affordable products that enhance your everyday life. We believe in offering a wide range of carefully selected items, ensuring that our customers receive the best value without compromising on quality.
                    </div>
                    <div class="email">Contact us: <span class="theme_color"><a href="mailto:admin@maanar.xyz">admin@maanar.xyz</a></span></div>
                    <a href="{{route('shop')}}" class="theme-btn btn-style-three">Shop Now</a>
                </div>
            </div>
            
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
              <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="image">
                      <img data-src="https://www.pickcel.com/blog/images/og/shopping-mall-signage-tr.jpg" class="lazyload" alt="..">
                        <div class="overlay-box">
                          <div class="year-box">Let's <br> Begin <br>Here</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection