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
        <h1 class="text-center">Contact Us</h1>
        <form>
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <a href="{{ route('submit') }}" class="btn btn-outline-success bg-green">Submit</a>
        </form>
    </div>

    @include('sections.footer')
    @include('sections.modal')
    <script type="text/javascript">
        $(document).ready(function() {
            loadcart();
        });
    </script>
@endsection
