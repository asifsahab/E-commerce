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
    <div class="container mt-5">
        <div class="alert alert-success">
            Thank you for your message! We'll get back to you soon.
        </div>
    </div>



    @include('sections.footer')
    @include('sections.modal')
    <script type="text/javascript">
        $(document).ready(function() {
            loadcart();
        });
    </script>
@endsection
