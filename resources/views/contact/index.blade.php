<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap News Template - Free HTML Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        @if(app()->getLocale() == "ar")
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.3.4-rc1/css/bootstrap-rtl.min.css">
        @endif

        <!-- Google Fonts -->
        <link rel="stylesheet" href="/contact/fonts/icomoon/style.css">
        <link rel="stylesheet" href="/contact/css/owl.carousel.min.css">
        <link href="img/favicon.ico" rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/contact/css/bootstrap.min.css">
        <!-- Style -->
        <link rel="stylesheet" href="/css/style.css">

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
                                <img src="/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="/img/ads-1.jpg" alt="Ads">
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
                            <a href="/single_page/economy" class="nav-item nav-link ">{{__('message.Economy')}}</a>
                            <a href="/single_page/sport" class="nav-item nav-link">{{__('message.Sports')}}</a>
                            <a href="/single_page/technology" class="nav-item nav-link">{{__('message.Technology')}}</a>

                            <a href="/view/contact" class="nav-item nav-link active">{{__('message.Contact Us')}}</a>
                        </div>
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
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Contact Start -->

        <div class="content">
    
    <div class="container">
      <div class="row">
          @if(app()->getLocale() == "ar")

            <div class="col-md-5 mr-auto" style = "margin-top:5%; margin-left:5%">
            <h2 style = "text-align : right">التواصل معنا</h2>
            <p class="mb-5" style = "text-align : right">أهلا بكم جميعاً بإمكانكم إرسال أي خبر لنشره في الموقع من خلال هذا النموذج</p>

            <ul class="list-unstyled pl-md-5 mb-5" style = "direction : rtl">
                <li class="d-flex text-black mb-3" style = "text-align : right; ">
                <span class="mr-3" ><span class="icon-map" >فلسطين -غزة</span></span>  <br> 
                </li>
                <li class="d-flex text-black mb-3" style = "text-align : right"><span class="mr-3"><span class="icon-phone"></span></span> 009725693541</li>
                <li class="d-flex text-black" style = "text-align : right"><span class="mr-3"><span class="icon-envelope-o"></span></span> news@gmail.com </li>
            </ul>
            </div>
        @endif

        <div class="col-md-6">
          <form method="post" action = "/store/contact" enctype="multipart/form-data" id="contactForm" name="contactForm">
              @csrf
            <div class="row">
              
              <div class="col-md-12 form-group">
                <label for="title" class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="notice" class="col-form-label">Notice</label>
                <input type="text" class="form-control" name="notice" id="notice">
              </div>
            </div>

            @if(app()->getLocale() == "ar")
            <div class="form-row" style = "direction : ltr">
                <div class="name">Upload Photo Or Video</div>
                <div class="value">
                    <div class="input-group js-input-file">
                        <input class="input-file" type="file" name="file" id="file" style = "margin-left:8%">
                    </div>
                </div>
            </div>
            @endif

            <br>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="content" class="col-form-label">Content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="7"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4" style = "background:#FF6F61 !important">
                <span class="submitting"></span>
              </div>
            </div>
          </form>

          <div id="form-message-warning mt-4"></div> 
          
        </div>
      </div>

      
      <!-- <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">

              <h2 class="mb-5">Fill the form. <br> It's easy.</h2>

              <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
            <div class="col-lg-4 ml-auto">
              <h3 class="mb-4">Let's talk about everything.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>  
        </div>
      </div> -->
  </div>



        <!-- Contact End -->
        
        <!-- Footer Start -->
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
      
        
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom" style = "margin-top:11%">
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
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
