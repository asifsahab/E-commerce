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


    <!-- About Us Section -->
    <section class="bg-light py-5 mb-5">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">About Us</h2>
                    <p>Welcome to Your Company, your trusted online source for quality products and exceptional service. We are committed to providing a seamless shopping experience, offering a wide range of products to suit your needs.</p>
                    <p>At Your Company, we strive to stay ahead in fashion, technology, and lifestyle trends. Our focus on customer satisfaction drives us to deliver superior service, prompt shipping, and hassle-free returns, ensuring a positive experience every time you shop with us.</p>
                    <p>Explore our collection and discover a world of possibilities. Join us in our mission to redefine online shopping and create lasting connections with our valued customers.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset ('image/icon/aboutpic.jpg') }}" alt="About Us Image" class="img-fluid rounded about-image">
                </div>
            </div>
        </div>
    </section>


    @include('sections.footer')
    @include('sections.modal')
    <script type="text/javascript">
        $(document).ready(function() {
            loadcart();
        });
    </script>
@endsection
