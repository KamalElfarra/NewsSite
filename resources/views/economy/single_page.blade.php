<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap News Template - Free HTML Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        @if(app()->getLocale() == "ar")
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.3.4-rc1/css/bootstrap-rtl.min.css">
        @endif
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>info@mail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="">About</a>
                            <a href="">Privacy</a>
                            <a href="">Terms</a>
                            <a href="">Contact</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="img/ads-1.jpg" alt="Ads">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/" class="nav-item nav-link ">{{__("message.Home")}}</a>
                            
                            <a href="/single_page/politic" class="nav-item nav-link">{{__('message.Politics')}}</a>
                            <a href="/single_page/economy" class="nav-item nav-link active">{{__('message.Economy')}}</a>
                            <a href="/single_page/sport" class="nav-item nav-link">{{__('message.Sports')}}</a>
                            <a href="/single_page/technology" class="nav-item nav-link">{{__('message.Technology')}}</a>

                            <a href="/view/contact" class="nav-item nav-link">{{__('message.Contact Us')}}</a>
                        <ul class = "navbar-nav mr-auto">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        style = "color:white;" class="nav-item nav-link">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>


                        </div>
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Nav Bar End -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                <li class="breadcrumb-item active" style = "margin-right:50%">{{__("message.economy")}}</li>
                </ul>
            </div>
        </div>

        <!-- Top News Start-->
        <div class="top-news">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-right" >
                    @foreach($economy as $data)
                        <div class="sn-container">
                            <div class="sn-content" style = "text-align:right; margin-right:5%; margin-top:8%;">
                                <a href = "/info/economy/{{$data->id}}" target = "_blank"><h4 class="sn-title" style = "width:250px; margin-left:45%; margin-top:2%; text-align:right;">{{$data->title}}</h4></a>
                                <p style = "text-align:right; width:50%;">{!! nl2br(substr($data->content,0,200))  !!}</p>
                                <p style = "text-align:right">{{$data->created_at->todatestring()}}</p>

                            </div>

                            
                        </div>
                        <div>
                                <img src="/{{$data->photo}}" style = "width:200px; height:300px; margin-top:-55%;   padding-top: 85px; " /> 
                        </div>

                    @endforeach

                    </div>

                <div class="col-md-6 tn-right" >

                    <div class="sn-container">
                            <div class="sn-img" >
                            <img src="/{{$latest->photo}}" style = "width:600px; margin-top:5%" />
                            </div>
                            <br>
                            <div class="sn-content">
                             <a href = "/info/economy/{{$latest->id}}" target = "_blank"><h4 class="sn-title" style = "margin-right:3%; text-align:right">{{$latest->title}}</h4></a> 
                                <p style = "margin-right:5%; width:100%; text-align:right">

                                {!! nl2br(substr($latest->content,0,200)) !!}

                                </p>
                            <p style = "text-align:right; margin-right:5%;">{{$latest->created_at->todatestring()}}</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <!-- Category News End-->

        <!-- Category News Start-->
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <br>
        <hr>
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    
                <div class="col-md-6" >
                    @foreach($all as $data)
                    <div class="sn-container">
                            <div class="sn-img" >
                                <img src="/{{$data->photo}}" style = "width:600px; height:500px; margin-left:107%" />
                            </div>
                            <div class="sn-content">
                                <br>
                               <a href = "/info/economy/{{$data->id}}" target = "_blank"> <h4 class="sn-title" style = "width:600px; margin-left:107%; text-align:right">{{$data->title}}</h4></a>
                                <p  style = "width:600px; margin-left:107%; text-align:right">
                                     {!! nl2br(substr($data->content,0,200)) !!}
                                </p>
                                <p style = "text-align:right; margin-right:2%;">{{$data->created_at->todatestring()}}</p>

                            </div>
                    </div>
                    @endforeach
                    {!! $all->render('pagination::bootstrap-4') !!}

                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <!-- Main News End-->

        <!-- Footer Start -->
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
       
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 copyright">
                        <p>Copyright for kamal majed</a>. All Rights Reserved</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
