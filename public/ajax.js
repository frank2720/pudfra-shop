function ajaxCall() {

    $(document).on('click', '#cart-details', function (e) {
        e.preventDefault();
        $('#cart-modal').modal('show');
    });

    $(document).on('click','.add-to-cart-btn', function (e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        $.ajax({
            url:'/add-to-cart/' + productId,
            type: 'post',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["success"]("Cart updated successfully","Success");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.remove-product', function(e){
        e.preventDefault();
        var productremovedId = $(this).data('productremoved-id');

        $.ajax({
            url:'/shopping/removeItem/' + productremovedId,
            type: 'get',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["warning"]("Item removed from the cart","Warning");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.button-plus', function (e) {
        e.preventDefault();
        var productId = $(this).data('incresed-id');

        $.ajax({
            url:'/add-to-cart/' + productId,
            type: 'post',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["success"]("Product quantity increased","Success");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.button-minus', function (e) {
        e.preventDefault();
        var productId = $(this).data('decreased-id');

        $.ajax({
            url:'/shopping/reduceItem/' + productId,
            type: 'get',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["warning"]("Product quantity decreased","Warning");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.pagination a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1]
        $.ajax({
            url:'/pagination/shop_data?page='+page,
            success:function(data){
                $('.shop-data').html(data);
            },
        });
    });

    $(document).on('keyup',function (e) {
        e.preventDefault();
        var search_string = $('#search').val();
        $.ajax({
            url:"{{route('product.search')}}",
            method:'GET',
            data:{
                search_string:search_string
            },
            success:function(data){
                $('.shop-data').html(data);
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('submit','#payform', function (e) {
    e.preventDefault();
    $.ajax({
        url:"{{route('stkpush')}}",
        data:new FormData(this),
        type:"POST",
        cache: false,
        contentType: false,
        processData: false,
        success:function($result)
        {
            $("#payform").trigger("reset");
            Command:toastr["success"]("Payment initiated successfully Enter your MPESA pin to complete the payment","Success");
            $('#cart-modal').modal('hide');
        }, 
        error:function($err){
                let error =$err.responseJSON;
                $.each(error.errors,function(index,value){
                    Command:toastr["error"](value,"Failed");
                });
            },       
        });
    });
};