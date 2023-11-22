<footer class="site-footer">
    <div class="container">
        <div class="row justify-content-between  section-padding">
            <div class=" col-xl-3 col-lg-4 col-sm-6">
                <div class="single-footer pb--40">
                    <div>
                        <img src="{{asset('image/icon/easyshop.png')}}" alt="" width="40%" height="40%">
                        <p class="text-dark bg-light">Embrace simplicity, explore diversity, and shop with ease at EasyShop!</p>
                    </div>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-2 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3>Infomation</h3>
                    </div>
                    <ul class="footer-list normal-list">
                        <li><a href="{{ route('contact') }}">Home</a></li>
                        <li><a href="{{ route('contact') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-2 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3>Contact Us</h3>
                    </div>
                    <ul class="footer-list normal-list">
                        <div class="footer-contact">
                            <p><span class="label"><i class="fa fa-map-marker"></i>&nbsp;</span><span class="text">I-9/3, Islamabad, Pakistan</span></p>
                            <p><span class="label"><i class="fas fa-envelope"></i>&nbsp;</span><span class="text">asif.sahab64@gmail.com</span></p>
                            <p><span class="label"><i class="fas fa-phone"></i>&nbsp;</span><span class="text">03356303511</span></p>
                        </div>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <p class="bg-dark text-light text-center">Copyright &copy; {{Carbon\Carbon::now()->format('Y')}} <a href="{{ route('main') }}" class="">EasyShop</a>.
            All Right Reserved.</p>
    </div>


</footer>

<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(document).on("show.bs.modal", "#quickModal", function(event) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var button = $(event.relatedTarget);
        var id = button.data("id");
        $.ajax({
            url: "getdetail",
            method: 'post',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(data) {
                $("#mainimage").html(data.image);
                $("#ptitle").html(data.title);
                $("#pprice").html(data.price + '-PKR');
                $("#discountprice").html(data.dprice + '-PKR');
                $("#des").html(data.description);
                $(".catname").html(data.catname);
                $("#pid").val(data.pid);
                $("#product_id").val(data.pid);
                $("#pqty").val(data.qqty);


            }
        });
    });

    $(document).on("submit", "#addtocart", function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        event.preventDefault();
        id = $("#pid").val();
        qty = $("#pqty").val();


        $.ajax({
            url: "additem",
            method: 'post',
            data: {
                id: id,
                qty: qty
            },
            dataType: 'json',
            success: function(data) {
                $("#quickModal").html();
                $("#quickModal").modal("hide");
                loadcart();
            }
        });
    });

    $(document).on("submit", ".directcart-form", function(event) {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).find('input[name="id"]').val();
        var qty = $(this).find('input[name="qty"]').val();
        $.ajax({
            url: "additem",
            method: 'post',
            data: {
                id: id,
                qty: qty
            },
            dataType: 'json',
            success: function(data) {
                loadcart();
            }
        });
    });










    $(document).on("click", ".removeproduct", function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        id = this.id;


        $.ajax({
            url: "removeproduct",
            method: 'post',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(data) {

                loadcart();
                loadcartpage();
            }
        });
    });

    function loadcart() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: 'loadcart',
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $("#cartbox").html(data.output);
                $("#totalitem").html(data.total);
                $("#totalprice").html(data.tprice);
            }
        });
    }
</script>
