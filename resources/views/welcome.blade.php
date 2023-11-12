@extends('layouts.app')
@section('content')
<!--Off Canvas Navigation Start-->
<aside class="off-canvas-wrapper">
    <div class="btn-close-off-canvas">
        <i class="ion-android-close"></i>
    </div>
    <div class="off-canvas-inner">
        <!-- search box start -->
        <div class="search-box offcanvas">
            <form>
                <input type="text" placeholder="Search Here">
                <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
            </form>
        </div>
        <!-- search box end -->


    </div>
</aside>
<!--Off Canvas Navigation End-->
</div>
<!--=================================
Hero Area
===================================== -->
<section class="hero-area hero-slider-1">
<div class="sb-slick-slider" data-slick-setting='{
    "autoplay": true,
    "fade": true,
    "autoplaySpeed": 3000,
    "speed": 3000,
    "slidesToShow": 1,
    "dots":true
    }'>
    <div class="single-slide bg-shade-whisper  ">
        <div class="container">
            <div class="home-content text-center text-sm-left position-relative">
                <div class="hero-partial-image image-right">
                    <img src="image/bg-images/home-slider-2-ai.png" alt="">
                </div>
                <div class="row g-0">
                    <div class="col-xl-6 col-md-6 col-sm-7">
                        <div class="home-content-inner content-left-side text-start">
                            <h1>H.G. Wells<br>
                            De Vengeance</h1>
                            <h2>Cover Up Front Of Books and Leave Summary</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide bg-ghost-white">
        <div class="container">
            <div class="home-content text-center text-sm-left position-relative">
                <div class="hero-partial-image image-left">
                    <img src="https://m.media-amazon.com/images/I/61GQ2KQtVSL.png" height="10%" alt="">
                </div>
                <div class="row align-items-center justify-content-start justify-content-md-end">
                    <div class="col-lg-6 col-xl-7 col-md-6 col-sm-7">
                        <div class="home-content-inner content-right-side text-start">
                            <h1>J.D. Kurtness <br>
                            De Vengeance</h1>
                            <h2>Cover Up Front Of Books and Leave Summary</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--=================================
Home Features Section
===================================== -->
<section class="mb--30">
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-md-6 mt--30">
            <div class="feature-box h-100">
                <div class="icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div class="text">
                    <h5>Free Shipping Item</h5>
                    <p> Orders over $500</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt--30">
            <div class="feature-box h-100">
                <div class="icon">
                    <i class="fas fa-redo-alt"></i>
                </div>
                <div class="text">
                    <h5>Money Back Guarantee</h5>
                    <p>100% money back</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt--30">
            <div class="feature-box h-100">
                <div class="icon">
                    <i class="fas fa-piggy-bank"></i>
                </div>
                <div class="text">
                    <h5>Cash On Delivery</h5>
                    <p>Lorem ipsum dolor amet</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt--30">
            <div class="feature-box h-100">
                <div class="icon">
                    <i class="fas fa-life-ring"></i>
                </div>
                <div class="text">
                    <h5>Help & Support</h5>
                    <p>Call us : + 0123.4567.89</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--=================================
Promotion Section One
===================================== -->
<section class="section-margin">
<h2 class="sr-only">Promotion Section</h2>
<div class="container">
    <div class="row space-db--30">
        <div class="col-lg-6 col-md-6 mb--30">
            <a href="#" class="promo-image promo-overlay">
                <img src="image/bg-images/promo-banner-with-text.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb--30">
            <a href="#" class="promo-image promo-overlay">
                <img src="image/bg-images/promo-banner-with-text-2.jpg" alt="">
            </a>
        </div>
    </div>
</div>
</section>
<!--=================================
Home Slider Tab
===================================== -->
<section class="section-padding">
<h2 class="sr-only">Home Tab Slider Section</h2>
<div class="container">
    <div class="row">
        <h1>{{$title}}</h1>
        <hr>
    </div>
    <div class="row mt-3">
        @foreach($products as $product)
        <div class="col-md-3 my-3">
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            {{$product->category->name}}
                        </a>
                        <h3><a href="/singleproduct/{{$product->id}}">{{$product->name}}</a></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{asset('storage/'.$product->image)}}">
                            <div class="hover-contents">
                                <a href="/singleproduct/{{$product->id}}" class="hover-image">
                                    <img src="{{asset('storage/'.$product->image)}}" class="img-thumbnail rounded mx-auto d-block">
                                </a>
                                <div class="hover-btns">

                                 <form class="directcart-form">
    <input type="hidden" name="id" value="{{$product->id}}">
    <input type="hidden" name="qty" value="1">
    <button type="submit" class="single-btn">
        <i class="fas fa-shopping-basket"></i>
    </button>
</form>


                                    <form action="/compare" method="get">
                                        @csrf
                                        <input type="hidden" value="{{$product->id}}" name="pid">
                                        <button class="single-btn" type="submit"><i class="fas fa-random"></i></button>
                                    </form>

                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" data-id="{{$product->id}}"
                                        class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block bg-light">
                            <span class="price text-black-50">RS {{$product->sprice}}</span>
                            <!-- <del class="price-old">{{$product->pprice+$product->sprice*52/100}}</del> -->
                            <!-- <span class="price-discount">50%</span> -->
                            <div class="rating my-2">
                                @for($i = 1; $i <= 5; $i++)
                                @if($i <= round($product->ratings->avg('rating')))
                                <span class="ion-android-star-outline star_on"></span>
                                @else
                                <span class="ion-android-star-outline"></span>
                                @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{$products->links('pagination::bootstrap-4')}}

    </div>
</div>
</section>
<!--=================================
Deal of the day
===================================== -->
<section class="section-margin">
<div class="container-fluid">
    <div class="promo-section-heading">
        <h2>Deal of the day up to 20% off Special offer</h2>
    </div>
    <div class="product-slider with-countdown  slider-border-single-row sb-slick-slider" data-slick-setting='{
        "autoplay": true,
        "autoplaySpeed": 8000,
        "slidesToShow": 6,
        "dots":true
        }' data-slick-responsive='[
        {"breakpoint":1400, "settings": {"slidesToShow": 4} },
        {"breakpoint":992, "settings": {"slidesToShow": 3} },
        {"breakpoint":768, "settings": {"slidesToShow": 2} },
        {"breakpoint":575, "settings": {"slidesToShow": 2} },
        {"breakpoint":490, "settings": {"slidesToShow": 1} }
        ]'>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Ypple
                    </a>
                    <h3><a href="product-details.html">Do You Really Need It? This Will Help You
                    </a>
                    </h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-2.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-1.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="12/12/2023"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Upple
                    </a>
                    <h3><a href="product-details.html">Here Is A Quick Cure For Book</a></h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-1.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-1.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="10/05/2023"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Ypple
                    </a>
                    <h3><a href="product-details.html">a Half Very Simple Things You To Save</a></h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-3.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-2.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="10/05/2023"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Epple
                    </a>
                    <h3><a href="product-details.html">What You Can Learn From Bill Gates</a>
                    </h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-5.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-4.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="10/05/2023"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Rpple
                    </a>
                    <h3><a href="product-details.html">Create Better BOOK With The Help Of Your</a></h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-6.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-4.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="10/05/2023"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Tpple
                    </a>
                    <h3><a href="product-details.html">Turn Your BOOK Into High Machine</a>
                    </h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-8.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-7.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="10/05/2023"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="product-card">
                <div class="product-header">
                    <a href="#" class="author">
                        Mpple
                    </a>
                    <h3><a href="product-details.html">Revolutionize Your BOOK With These Easy
                    </a></h3>
                </div>
                <div class="product-card--body">
                    <div class="card-image">
                        <img src="image/products/product-13.jpg" alt="">
                        <div class="hover-contents">
                            <a href="product-details.html" class="hover-image">
                                <img src="image/products/product-11.jpg" alt="">
                            </a>
                            <div class="hover-btns">
                                <a href="cart.html" class="single-btn">
                                    <i class="fas fa-shopping-basket"></i>
                                </a>
                                <a href="wishlist.html" class="single-btn">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a href="compare.html" class="single-btn">
                                    <i class="fas fa-random"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                    class="single-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price-block">
                        <span class="price">£51.20</span>
                        <del class="price-old">£51.20</del>
                        <span class="price-discount">20%</span>
                    </div>
                    <div class="count-down-block">
                        <div class="product-countdown" data-countdown="10/05/2023"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--=================================
Best Seller Product
===================================== -->

<!--=================================
CHILDREN’S BOOKS
===================================== -->

<!--=================================
Promotion Section Two
===================================== -->

<!--=================================
ARTS & PHOTOGRAPHY BOOKS
===================================== -->

<!--=================================
Promotion Section Three
===================================== -->
<section class="section-margin">
<div class="promo-wrapper promo-type-three">
    <a href="#" class="promo-image promo-overlay bg-image" data-bg="image/bg-images/promo-banner-full.jpg">
    </a>
    <div class="promo-text w-100 ml-0">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-7">
                    <h2>I Love This Idea!</h2>
                    <h3>Cover up front of book and
                    leave summary</h3>
                    <a href="#" class="btn btn--yellow">$78.09 - Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--=================================
Home Blog Slider
===================================== -->
<!--=================================
Home Blog
===================================== -->

@include("sections.footer")
@include("sections.modal")
<script type="text/javascript">
$(document).ready(function(){
loadcart();
});
</script>
@endsection
