<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script>
        $(document).ready(function(){
            $('#addproduct-btn').click(function () {
                $('#addproductModal').modal('show');
            });
            $('#productform').on('submit', function (event) {
                event.preventDefault();
                $.ajax({
                    url:"{{route('products.store')}}",
                    data:$("#productform").serialize(),
                    type:"POST",
                    success:function($result)
                    {
                        $("#productform").trigger("reset");
                        $('#addproductModal').modal('hide');
                        Command:toastr["success"]("Student added successfully","Success");
                    }, 
                    error:function($err){
                        let error =$err.responseJSON;
                        $.each(error.errors,function(index,value){
                            //$('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                            Command:toastr["error"](value,"Failed");
                        });
                    },       
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</body>
</html>