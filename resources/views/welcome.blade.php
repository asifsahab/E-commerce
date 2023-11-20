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
    <section class="section-margin">
        <div class="promo-wrapper promo-type-three">
            <a href="#" class="promo-image promo-overlay bg-image" data-bg="{{asset('image/icon/pcover.png')}}">
            </a>
            <div class="promo-text w-100 ml-0">
                <div class="container">
                    <div class="row w-100">
                        <div class="col-lg-7">
                            <h2>Welcome to Easy Shop</h2>
                            <h3> Your One-Stop Destination for Effortless Shopping!</h3>
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
                            <p> Orders over PKR-2000</p>
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
                            <p>Cash on deleviry Available</p>
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
                            <p>Call us : 03356303511</p>
                        </div>
                    </div>
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
                <h1>{{ $title }}</h1>
                <hr>
            </div>
            <div class="row mt-3">
                @foreach ($products as $product)
                    <div class="col-md-3 my-3">
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        {{ $product->category->name }}
                                    </a>
                                    <h3><a href="/singleproduct/{{ $product->id }}">{{ $product->name }}</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('storage/' . $product->image) }}">
                                        <div class="hover-contents">
                                            <a href="/singleproduct/{{ $product->id }}" class="hover-image">
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    class="img-thumbnail rounded mx-auto d-block">
                                            </a>
                                            <div class="hover-btns">

                                                <form class="directcart-form">
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <button type="submit" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </button>
                                                </form>


                                                <form action="/compare" method="get">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}" name="pid">
                                                    <button class="single-btn" type="submit"><i
                                                            class="fas fa-random"></i></button>
                                                </form>

                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    data-id="{{ $product->id }}" class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block bg-light">
                                        <span class="price text-black-50">RS {{ $product->sprice }}</span>
                                        <!-- <del class="price-old">{{ $product->pprice + ($product->sprice * 52) / 100 }}</del> -->
                                        <!-- <span class="price-discount">50%</span> -->
                                        <div class="rating my-2">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= round($product->ratings->avg('rating')))
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
                {{ $products->links('pagination::bootstrap-4') }}

            </div>
        </div>
    </section>

    <!--=================================
    Promotion Section Three
    ===================================== -->
    <section class="section-margin">
        <div class="promo-wrapper promo-type-three">
            <a href="#" class="promo-image promo-overlay bg-image " data-bg="image/bg-images/f-banner.jpg">
            </a>
            <div class="promo-text w-100 ml-0">
                <div class="container">
                    <div class="row w-100">

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

    @include('sections.footer')
    @include('sections.modal')
    <script type="text/javascript">
        $(document).ready(function() {
            loadcart();
        });
    </script>
@endsection
