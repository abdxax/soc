<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOC</title>
    <!--Bootstrap -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet" />
    <style>
        .nav-side{
            height: 100vh;
            width: 13vw;
            background-color: #00a159;
        }
        .nav-side ul {
            list-style: none;
        }
        .nav-side ul li a {
            color: #fff;
            text-decoration:none;
        }
    </style>
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SOC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">



                </ul>

            </div>
        </div>
    </nav>

</header>

<section>
    <div class="row">
        <!--Nav side-->
        <div class="col-3 nav-side">
            @if(auth()->user()->information->depart_id==4)
            <ul>
                <li><a href="{{route('user.index')}}">الرئيسية</a> </li>
                <li><a href="{{route('register')}}">الحسابات</a> </li>
                <li><a href="">الاقسام</a> </li>
            </ul>
            @else
                <ul>
                    <li><a href="{{route('user.index')}}">الرئيسية</a> </li>
                    <li><a href="{{route('user.notice')}}">البلاغات</a> </li>
                    <li><a href="">التنبيهات</a> </li>
                    <li><a href="">التقارير</a> </li>
                </ul>
            @endif

        </div>

        <!--MainSection-->
        <div class="col-9">
            @yield('main-section')
        </div>
    </div>
</section>



<!--Secript bootstrap -->
<script src="{{asset('bootstrap/dist/js/bootstrap.js')}}"></script>
</body>
</html>


