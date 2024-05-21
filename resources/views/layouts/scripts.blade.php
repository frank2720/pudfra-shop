<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script src="{{asset('assets/js/jarallax.min.js')}}"></script>
<script src="{{asset('assets/js/packery.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('assets/js/js-cookie.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/interface.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {

    $(document).on('click','.pagination a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1]
        $.ajax({
            url:'/pagination/products?page='+page,
            success:function(data){
                $('.shop-data').html(data);
            },
        });
    });

    $(document).on('keyup',function (e) {
        e.preventDefault();
        var search_string = $('#search').val();
        $.ajax({
            url:"/search",
            method:'GET',
            data:{
                search_string:search_string
            },
            success:function(data){
                let htmlView = '';
                if(data.length <= 0){
                    htmlView+= `<div class="text-danger text-center">No product found</div>`;
                }
                for(let i = 0; i < data.length; i++){
                    htmlView += "<div class='row mb__10 pb__10'><div class='col widget_img_pr'><a class='db pr oh' href='/product-details_"+data[i].id+"'><img src='data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201200%201200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E' class='w__100 lz_op_ef lazyload' alt='sunlight bell solar lamp' data-src='storage/"+data[i].images[0].url+"' width='80' height='80'></a></div><div class='col widget_if_pr'><a class='product-title db' href='/product-details_"+data[i].id+"'>"+data[i].name+"</a>"+new Intl.NumberFormat('en-US', 
                                {  
                                    style: 'currency',  
                                    currency: 'Ksh' 
                                }).format(data[i].price)+"</div></div>";
                }    
                $('#search_product').html(htmlView);
            },
            error: function (error) {
                console.log('Server error occured');
            }
        });
    });

    $(document).on('submit','#payform', function (e) {
    e.preventDefault();
    $.ajax({
        url:"/payments/initiatepush",
        data:new FormData(this),
        type:"POST",
        cache: false,
        contentType: false,
        processData: false,
        success:function(data)
        {
            $("#payform").trigger("reset");
            Command:toastr["success"]("Payment initiated successfully Enter your MPESA pin to complete the order","Success");
            $('#cart-modal').modal('hide');
        }, 
        error: function (error) {
                console.log('Server error occured');
            }     
        });
    });
    });

    $(document).ready(function() {
        // For desktop hover
        $('.img-small-wrap img').mouseover(function() {
            enlargeImage($(this).attr('src'));
        });

        $('.img-small-wrap img').mouseleave(function() {
            $('.zoomed-image').fadeOut().html('');
        });

        // For mobile touch
        $('.img-small-wrap img').on('touchstart', function() {
            enlargeImage($(this).attr('src'));
        });

        function enlargeImage(src) {
            $('.zoomed-image').html('<img src="' + src + '">').fadeIn();
        }
    });
</script>