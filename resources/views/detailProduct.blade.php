<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LIGNUM | Our Product</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Parallax-->
    <link rel="stylesheet" href="vendor/onepage-scroll/onepage-scroll.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <a href="/#4"><button id="myBtnContact" title="Order Now!">Order Now</button></a>
        <a href="/"><button id="myBtnHome" title="Back to Home Page">Home</button></a>
        <div class="main">
            @foreach($products as $p)
            @if($loop->iteration%2 == 0)
            <section id="{{$loop->iteration}}">
                <div class="d-flex h-100 align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src=<?php echo asset('img/product_photo/'.$p->image)?> alt="..." class="img-fluid d-block mx-auto">
                            </div>
                            <div class="col-lg-6">
                                <header class="text-center">
                                    <h2 class="text-uppercase lined">{{ $p->product_name }}</h2>
                                </header>
                                <p class="lead">Harga : {{ $p->price }} /pcs</p>
                                <p class="lead">{{ $p->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @else
            <section id="1">
                <div class="d-flex h-100 align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <header class="text-center">
                                    <h2 class="text-uppercase lined">{{ $p->product_name }}</h2>
                                </header>
                                <p class="lead">Harga : {{ $p->price }} /pcs</p>
                                <p class="lead">{{ $p->description }}</p>
                            </div>
                            <div class="col-lg-6">
                                <img src=<?php echo asset('img/product_photo/'.$p->image)?> alt="..." class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            @endforeach
        </div>
        <!-- JavaScript files-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/onepage-scroll/jquery.onepage-scroll.min.js"></script>
        <script src="vendor/lightbox2/js/lightbox.min.js"></script>
        <script src="js/front.js"></script>
        <script src="js/product.js"></script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </body>
</html>