
    <footer class="site-footer">
        <div class="container">
            <div class="row justify-content-between  section-padding">
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-footer pb--40">
                        <div>
                            <img src="image/icon/easyshop.png" alt="" width="40%" height="40%">
                        </div>
                        <div class="footer-contact">
                            <p><span class="label">Address:</span><span class="text">Islamabad, Pakistan</span></p>
                            <p><span class="label">Email:</span><span class="text">asif.sahab64@gmail.com</span></p>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="footer-title">
                            <h3>Information</h3>
                        </div>
                        <ul class="footer-list normal-list">
                            <li><a href="#">Prices drop</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Best sales</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="footer-title">
                            <h3>Extras</h3>
                        </div>
                        <ul class="footer-list normal-list">
                            <li><a href="{{route('contact')}}">About Us</a></li>
                            <li><a href="#">Store</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <p class="bg-dark text-light text-center">Copyright © <a href="{{route('main')}}" class="">EasyShop</a>. All Right Reserved.</p>
        </div>


    </footer>

<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script>

        $(document).on("show.bs.modal","#quickModal",function(event){

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        var button=$(event.relatedTarget);
        var id=button.data("id");
        $.ajax({
            url:"getdetail",
            method:'post',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
                $("#mainimage").html(data.image);
                $("#ptitle").html(data.title);
                $("#pprice").html(data.price+'-PKR');
                $("#discountprice").html(data.dprice+'-PKR');
                $("#des").html(data.description);
                $(".catname").html(data.catname);
                $("#pid").val(data.pid);
                $("#product_id").val(data.pid);
                $("#pqty").val(data.qqty);


            }
        });
    });

   $(document).on("submit","#addtocart",function(event){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
                event.preventDefault();
            id=$("#pid").val();
            qty=$("#pqty").val();


        $.ajax({
            url:"additem",
            method:'post',
            data:{id:id,qty:qty},
            dataType:'json',
            success:function(data)
            {
                 $("#quickModal").html();
                  $("#quickModal").modal("hide");
                  loadcart();
            }
        });
    });

$(document).on("submit",".directcart-form",function(event) {
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var id = $(this).find('input[name="id"]').val();
    var qty = $(this).find('input[name="qty"]').val();
    $.ajax({
        url:"additem",
        method:'post',
        data:{
            id: id,
            qty: qty
        },
        dataType:'json',
        success:function(data) {
            loadcart();
        }
    });
});










     $(document).on("click",".removeproduct",function(event){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

            id=this.id;


        $.ajax({
            url:"removeproduct",
            method:'post',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {

                  loadcart();
                  loadcartpage();
            }
        });
    });
function loadcart()
{
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $.ajax({

        url:'loadcart',
        method:'post',
        dataType:'json',
        success:function(data) {
            $("#cartbox").html(data.output);
            $("#totalitem").html(data.total);
            $("#totalprice").html(data.tprice);
        }
    });
}
</script>
