<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--roy roy roy --><!--roy roy roy -->
    <!--roy roy roy --><!--roy roy roy -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!--roy roy roy --><!--roy roy roy -->
    <!--roy roy roy --><!--roy roy roy -->
    <!-- Custom fonts for this template -->
    <link href="{{asset('public/frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('public/frontend/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Provashish Roy</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('write.post')}}">Write Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url({{URL::to('public/frontend/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>ROY Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    @yield('content')
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!--roy roy roy --><!--roy roy roy -->
<!--roy roy roy --><!--roy roy roy -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!--roy roy roy --><!--roy roy roy -->

<!-- Custom scripts for this template -->
<script src="{{asset('public/js/clean-blog.min.js')}}"></script>



<script src="{{asset('https://unpkg.com/sweetalert/dist2/sweetalert.min.js')}}"></script>

<!--roy roy roy--><!--roy roy roy-->
<!--roy roy roy--><!--roy roy roy-->
<script>
@if(Session::has('message'))
    var type = "{{Session::get('alert-type','info') }}"
    switch(type){
      case'info':
             toastr.info("{{Session::get('message') }}");
             break;
    case'success':
             toastr.success("{{Session::get('message') }}");
             break;
    case'warning':
             toastr.warning("{{Session::get('message') }}");
             break;
    case'error':
             toastr.error("{{Session::get('message') }}");
             break;
    }
    @endif
</script>
<!--roy roy roy--><!--roy roy roy-->
<!--roy roy roy--><!--roy roy roy-->
<script>
    $(document).on("click","#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            buttons : true,
            dangerMode: true
        })
            .then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
            }else {
                swal("safe data");
            }
        });
    });
</script>
<!--roy roy roy--><!--roy roy roy--><!--roy roy roy--><!--roy roy roy--><!--roy roy roy--><!--roy roy roy-->
</body>

</html>
