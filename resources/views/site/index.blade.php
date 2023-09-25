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
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->

        <!-- Top Bar Start -->

        <!-- Brand Start -->

        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <br>
        <div class="nav-bar" style="height : 70px">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto" style = "margin-top:1%">
                          <a href="/">
                              <img src="img/image.png" style="width : 30%; height : 110%; " alt="Logo">
                          </a>

                            <a href="/" class="nav-item nav-link active">{{__("message.Home")}}</a>

                            <a href="/single_page/politic" class="nav-item nav-link">{{__('message.Politics')}}</a>
                            <a href="/single_page/economy" class="nav-item nav-link">{{__('message.Economy')}}</a>
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

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left" >

                    <div class="sn-container">
                            <div class="sn-img" >
                                <img src="/{{$politic_last->photo}}" style = "width:100%; height:450px;" />
                            </div>
                            <br>
                            <div class="sn-content">
                                <a href = "/info/politic/{{$politic_last->id}}" target = "_blank"><h4 class="sn-title" style = "text-align:right">{{$politic_first->title}}</h4></a>
                                <p style = "text-align:right; margin-right:2%;">
                                     {!!  nl2br(substr($politic_last->content,0,208)) !!}
                                </p>
                                <p style = "text-align:right">{{$politic_last->created_at->todatestring()}}</p>
                            </div>
                        </div>
                    </div>


                <div class="col-md-6 tn-right" >

                    <div class="sn-container">
                            <div class="sn-img" >
                                <img src="/{{$sport_last->photo}}" style = "width:100%; height:450px;" />
                            </div>
                            <br>
                            <div class="sn-content">
                             <a href = "/info/sport/{{$sport_last->id}}" target = "_blank"><h4 class="sn-title" style = "text-align:right">{{$sport_first->title}}</h4></a>
                                <p style = "text-align:right; margin-right:2%;">

                                    {!! nl2br(substr($sport_last->content,0,210))  !!}

                                </p>
                                <p style = "text-align:right">{{$sport_last->created_at->todatestring()}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>{{__("message.Politic")}}</h2>
                        <div class="row cn-slider">
                        @foreach($order_by_politic as $data)

                            <div class="col-md-6">

                                <div class="cn-img" style = "height:130px;">
                                    <img src="/{{$data->photo}}" />
                                    <div class="cn-title">
                                        <a href="/info/politic/{{$data->id}}" target = "_blank">{{$data->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>{{__("message.Technology")}}</h2>
                        <div class="row cn-slider">

                        @foreach($order_by_tech as $data)

                            <div class="col-md-6">

                                <div class="cn-img" style = "height:130px;">
                                    <img src="/{{$data->photo}}" />
                                    <div class="cn-title">
                                        <a href="/info/technology/{{$data->id}}" target = "_blank">{{$data->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>{{__("message.Economy")}}</h2>
                        <div class="row cn-slider">

                        @foreach($order_by_economy as $data)

                            <div class="col-md-6">

                                <div class="cn-img" style = "height:130px;">
                                    <img src="/{{$data->photo}}" />
                                    <div class="cn-title">
                                        <a href="/info/economy/{{$data->id}}" target = "_blank">{{$data->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>{{__("message.Sport")}}</h2>
                        <div class="row cn-slider">

                        @foreach($order_by_sport as $data)

                            <div class="col-md-6">

                                <div class="cn-img" style = "height:130px;">
                                    <img src="/{{$data->photo}}" />
                                    <div class="cn-title">
                                        <a href="/info/sport/{{$data->id}}" target = "_blank">{{$data->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#popular">{{__("message.Popular News")}}</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div id="popular" class="container tab-pane active">
                                @foreach($order_by_popular as $data)
                                    <div class="tn-news">
                                        <div class="tn-img">
                                            <img src="/{{$data->photo}}" />
                                        </div>
                                        <div class="tn-title">
                                            <a href="/info/popular/{{$data->id}}" target = "_blank">{{$data->title}}</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">


                    <div class="sn-container">
                            <div class="sn-img" >
                                <img src="/{{$technology_last->photo}}" style = "width:550px;" />
                            </div>
                            <div class="sn-content">
                                <br>
                                 <a href = "/info/technology/{{$technology_last->id}}"><h3 class="sn-title" style = "text-align:right; margin-right:3%">{{$technology_last->title}}</h3></a>
                                <p style = "text-align:right; margin-right:5%">
                                  {!! nl2br(substr($technology_last->content,0,210))  !!}
                                </p>
                                <p style = "text-align:right; margin-right:5%">{{$technology_last->created_at->todatestring()}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$politic_skip->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/politic/{{$politic_skip->id}}" target = "_blank">{{$politic_skip->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$economy_skip->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/economy/{{$economy_skip->id}}" target = "_blank">{{$economy_skip->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$sport_skip->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/sport/{{$sport_skip->id}}" target = "_blank">{{$sport_skip->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$technology_skip->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/technology/{{$technology_skip->id}}" target = "_blank">{{$technology_skip->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$politic_last->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/politic/{{$politic_last->id}}" target = "_blank">{{$politic_last->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$economy_last->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/economy/{{$economy_last->id}}" target = "_blank">{{$economy_last->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$sport_last->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/sport/{{$sport_last->id}}" target = "_blank">{{$sport_last->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$technology_last->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/technology/{{$technology_last->id}}" target = "_blank">{{$technology_last->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mn-img" style = "height:200px;">
                                    <img src="/{{$politic_first->photo}}" />
                                    <div class="mn-title">
                                        <a href="/info/politic/{{$politic_first->id}}" target = "_blank">{{$politic_first->title}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3" >
                        <div class="mn-list" >
                            <h2 style = "text-align:right">{{__("message.Read More")}}</h2>

                            <ul >
                                @foreach($get_more as $data)
                                    <li><a href="/info/more/{{$data->id}}" >{{$data->title}}</a></li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

        <!-- Footer Start -->
        <!-- Footer End -->

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
