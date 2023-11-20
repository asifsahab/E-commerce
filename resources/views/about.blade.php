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
                    <p>Welcome to EasyShop, your ultimate online shopping destination! At EasyShop, we redefine convenience by offering a seamless and delightful shopping experience. Discover a vast array of quality products curated to suit your every need, from trending fashion and cutting-edge technology to everyday essentials.</p>
                    <p>Our commitment at EasyShop is to ensure customer satisfaction at every step. We pride ourselves on delivering top-notch service, lightning-fast shipping, and hassle-free returns. With a user-friendly interface and secure transactions, we aim to make your shopping journey effortless and enjoyable.</p>
                    <p>Join us in exploring the latest trends, finding must-have items, and experiencing the joy of shopping from the comfort of your home. At EasyShop, we strive to exceed your expectations and create lasting relationships with our valued customers. Embrace simplicity, explore diversity, and shop with ease at EasyShop!</p>
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
