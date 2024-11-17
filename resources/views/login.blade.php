<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOC</title>
    <!--Bootstrap -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet" />
<style>
    body{
        background-image: url("{{asset('images/background/login.jpg')}}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
</head>
<body>

<div class="">
<div class="row justify-content-center">

    <div class="col-4 mt-2 ">
        <div class="card">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="form-group mt-2">
                        <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني ">
                    </div>
                    <div class="form-group mt-2">
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور ">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" name="submit" class="btn btn-success" value="تسجيل دخول">
                    </div>

                </form>
            </div>
        </div>
    </div>




</div>
</div>


<!--Secript bootstrap -->
<script src="{{asset('bootstrap/dist/js/bootstrap.js')}}"></script>
</body>
</html>

