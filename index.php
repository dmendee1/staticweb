<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/notify.css" rel="stylesheet">
  <style type="text/css">
  html,
  body,
  header,
  .view {
    height: 100%;
  }
  body {
    animation-duration: 4s;
  }
  #fuck {
    display: none;
  }
  .w3-sidebar {
    background: url("assets/img/background1.jpg");
    opacity: 0.9;
    color: #fff;
    font-weight: bold;
  }

  div.w3-sidebar a {
    padding: 1em 2em;
    border-bottom: 1px solid #fff;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 1000px;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
      height: 600px;
    }
  }

  .btn .fa {
    margin-left: 3px;
  }

  .top-nav-collapse {
    background-color: #424f95 !important;
  }

  .navbar:not(.top-nav-collapse) {
    background: transparent !important;
  }
  .sidebar {
    z-index: 3;
  }
  #logo {
    width: 80px;
    margin-right: 20px; 
    transform: translateX(-50%) translateY(25%);
  }

  #fuck {
    color: #555;
    padding: 5px 15px;
    background: #fff;
    font-weight: bold;
  }

  #abouts {
    width: 50%;
    float: right;
  }

  #mobile_logo {
    display: none;
  }

  @media (max-width: 991px) {
    .navbar:not(.top-nav-collapse) {
      background: #424f95 !important;
    }
    #logo {
      width: 60px;
      transform: translateX(20%) translteY(20%);
    }
    .navbar-brand {
      transform: translateX(-120%);
    }
    
    #abouts {
      margin: 0 auto;
      width: 100%;
      float: none;
    }

    #mobile_logo {
      display: block;
      float: right;
      transform: translateX(-10%) translateY(10%);
    }

    .navbar {
      display: none;
    }
    #fuck {
      position: fixed;
      display: block;
      z-index: 2;
    }
    #message {
      width: 90%; 
    }
  }

  main {
    transition-duration: 5s;
  }

  .btn-white {
    color: black !important;
  }

  h6 {
    line-height: 1.7;
  }

  .rgba-gradient {
    background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.3), rgba(29, 210, 177, 0.3) 100%);
    background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.3), rgba(29, 210, 177, 0.3) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.3)), to(rgba(29, 210, 177, 0.5)));
    background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.3), rgba(29, 210, 177, 0.3) 100%);
    background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.3), rgba(29, 210, 177, 0.3) 100%);
  }
  .rgba-custom-about {
    background: -moz-linear-gradient(45deg, rgba(42, 27, 0, 0.1), rgba(29, 210, 177, 0.1) 100%);
    background: -webkit-linear-gradient(45deg, rgba(42, 27, 0, 0.1), rgba(29, 210, 177, 0.1) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 0, 0.1)), to(rgba(29, 210, 177, 0.1)));
    background: -o-linear-gradient(45deg, rgba(42, 27, 0, 0.1), rgba(29, 210, 177, 0.1) 100%);
    background: linear-gradient(to 45deg, rgba(42, 27, 0, 0.1), rgba(29, 210, 177, 0.1) 100%);
  }
  .rgba-custom-about1 {
    background: -moz-linear-gradient(45deg, rgba(172, 128, 255, 0.3), rgba(172, 128, 255, 0.3) 100%);
    background: -webkit-linear-gradient(45deg, rgba(172, 128, 255, 0.3), rgba(172, 128, 255, 0.3) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(172, 128, 255, 0.3)), to(rgba(172, 128, 255, 0.5)));
    background: -o-linear-gradient(45deg, rgba(172, 128, 255, 0.3), rgba(172, 128, 255, 0.3) 100%);
    background: linear-gradient(to 45deg, rgba(172, 128, 255, 0.3), rgba(172, 128, 255, 0.3) 100%);
    -webkit-box-shadow: 10px 100px 50px 10px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 50px 10px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 50px 10px rgba(0,0,0,0.75);
    padding: 3em 0em;
  }
  </style>
</head>

<body>
  <!-- Main navigation -->
  <header>
    <!--Navbar-->
    <button id="fuck" class="w3-xlarge" onclick="w3_open()">☰</button>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="height: 50px;">
      <div class="container">
        <img id="logo" src="assets/img/newlog.png" style="">
        <a class="navbar-brand" href="#">
          <strong>МҮТТ</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav" id="navbar-example2" role="navigation">
            <li class="nav-item active">
              <a class="nav-link" href="#">Нүүр
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Бидний тухай</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Үйл ажиллагаа</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Холбоо барих</a>
            </li>
          </ul>
          <form class="form-inline" style="float: right; transform: translateX(200%);>
            <div class="md-form my-0">
              <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
              <a href="https://www.facebook.com/oiltank.mn/" target="_blank">
                <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
              </a>
              <a href="tel: +976 9600 4380">
                <i class="fas fa-phone fa-lg white-text mr-4"> </i>
                <span class="text-white" style="transform: translateX(-100px)">+976 9600 4380</span>
              </a>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <div class="sidebar">
     <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;" id="mySidebar">
      <button onclick="w3_close()" class="w3-bar-item w3-large text-white" style="border-bottom: 1px solid #fff; padding: 0.5em 1em">Хаах &times;</button>
      <a href="#" class="w3-bar-item w3-button" onclick="w3_close()">Нүүр</a>
      <a href="#about" class="w3-bar-item w3-button" onclick="w3_close()">Бидний тухай</a>
      <a href="#services" class="w3-bar-item w3-button" onclick="w3_close()">Үйлчилгээ</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="w3_close()">Холбоо барих</a>

    </div>
    </div>
    <div class="view" style="background-image: url('assets/img/attachments/indexcover.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <img id="mobile_logo" src="assets/img/newLog.png" width="25%">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
              
              <h1 class="h1-responsive font-weight-bold mt-sm-5">Бид таны бизнесийн өсөлтийг дэмжинэ</h1>
              <hr class="hr-light">
              <h6 class="mb-4">Бид чанарын өндөр шаардлага хангасан түлшний<br>болон төмөр савнуудыг материал хэмжээний өргөн<br>сонголттойгоор таньд санал болгож байна.</h6>
            </div>
            <!--Grid column-->
            <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
              <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  <!-- Main navigation -->
  <!--Main Layout-->
  <main class="scrollspy z-depth-1" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <!-- Jumbotron -->
<div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="10000">
  <div role="alert" aria-live="assertive" aria-atomic="true">...</div>
</div>
    <div class="balaizuraas" style="padding: 1em 2em;">
      <center>
        <hr class="rgba-black-light text-center" style="margin: 0 15%; width: 50%; height: 2px; border-radius: 10px;">
      </center>
    </div>

    <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="container carousel slide carousel-fade" data-ride="carousel" style="height: 100%">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
      <li data-target="#carousel-example-1z" data-slide-to="4"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/attachments/zurag1.jpg"
          alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/attachments/zurag2.jpg"
          alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/attachments/zurag3.jpg"
          alt="Third slide">
      </div>

      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/attachments/zurag5.jpg"
          alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/attachments/zurag4.jpg"
          alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->


    <div class="balaizuraas" style="padding: 1em 2em;">
      <center>
        <hr class="rgba-black-light text-center" style="margin: 0 15%; width: 50%; height: 2px; border-radius: 10px;">
      </center>
    </div>

    <div id="about" class="card card-image" style="background-image: url('assets/img/attachments/company.jpg'); background-size: cover;min-height: 100vh">
      <div class="container text-white text-center rgba-custom-about py-5 px-4" style="">
        <div id="abouts" class="row">
          <div class="rgba-custom-about1" style="">

            <!-- Content -->
            <h5 class="h5 orange-text"></h5>
            <h2 class="card-title h2 py-4">Байгууллагын<br>танилцуулга</h2>
            <p class="px-5" style="text-align: justify;">Манай байгууллага 2015 оноос хойш тасралтгүй үйл ажиллагаа явуулж байгаа бөгөөд бид бүтээгдхүүнийхаа чанарыг өдрөөс өдөрт хөгжүүлэхийг эрхэм зорилго болгон ажилласаар ирсэн билээ. Бидний зүгээс танд өндөр чанар болон шалгарсан ур чадварын баталгааг амлах ба энэ нь бидний хоорондын бизнесийн хамтын итгэмжит харилцааг үүсгэнэ гэдэгт итгэлтэй байна. Манай компани нь 5-100м.куб хүртлэх бүх төрлийн зориулалттай түлшний болон төмөр савнуудыг чанарын өндөр түвшинд захиалгын дагуу үйлдвэрлэж байна.</p>
            <!-- <a class="btn peach-gradient"><i class="fas fa-clone left"></i> View project</a> -->

          </div>
        </div>
      </div>
    </div>
    <!-- News jumbotron -->
    <!-- Section: Testimonials v.1 -->

    <section class="mx-4 text-center" id="services">
      <div class="balaizuraas" style="padding: 1em 2em;">
        <center>
          <hr class="rgba-black-light text-center" style="margin: 0 15%; width: 50%; height: 2px; border-radius: 10px;">
        </center>
      </div>
      <!-- Section heading -->
      <h2 class="h1-responsive font-weight-bold my-5">Бүтээгдэхүүн үйл ажиллагаа</h2>
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-3 col-md-3 mt-5 mb-5">
          <!--Card-->
          <div class="card testimonial-card">
            <div class="my-2 white">
              <img src="assets/img/attachments/watertank2.jpg" class="rounded-circle img-fluid" width="250px">
            </div>
            <div class="card-body">
              <!--Name-->
              <h4 class="font-weight-bold mb-4">Ундны усны төмөр сав</h4>
              <hr>
              <!--Quotation-->
              <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Энэхүү төмөр сав нь зэвэрдэггүй бохирдол багатайгаараа бусад төрлийн савнуудаас онцлогтой бөгөөд хүний биед үзүүлэх сөрөг нөлөөгүй нь тогтоогдсоноор бид өдөр тутмын хэрэгцээндээ буюу ундны усаа хадгалах болон хүнсний үйлдвэрүүдэд илүүтэй ашиглах болсон юм.</p>
            </div>
          </div>
          <!--Card-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mt-2 mb-2">
          <!--Card-->
          <div class="card testimonial-card">
            <div class="wrapper-carousel-fix">
    <!-- Carousel Wrapper -->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
      data-interval="false" style="height: 800px;">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="testimonial">
            <!--Avatar-->
            <div class="mx-auto mb-4 mt-5">
              <img src="assets/img/attachments/zuuvur1.jpg" class="img-fluid"
                alt="First sample avatar image" width="800px">
            </div>
            <!--Content-->
            <h4 class="font-weight-bold mb-4">1. Шатхууны зөөврийн зориулалт бүхий сав.</h4>
              <hr>
            <p>
              <i class="fas fa-arrow-alt-circle-right"></i> Энэхүү төмөр савыг уул уурхайд зөөврийн байдлаар ашиглахад нэн тохиромжтой. Мөн шатахуун түгээгүүрийн шахуургын төхөөрөмжийг суурьлуулж өгдөгөөрөө давуу талтай цогц шийдэл болдог. 
            </p>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star-half-alt blue-text"> </i>
          </div>
        </div>
        <!--First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="testimonial">
            <!--Avatar-->
            <div class="mx-auto mb-4 mt-5">
              <img src="assets/img/attachments/deer2.jpg" class="img-fluid"
                alt="Second sample avatar image" width="100%">
            </div>
            <!--Content-->
            <h4 class="font-weight-bold mb-4">2. Шатхууны зориулалт бүхий сав(Газрын дээрх).</h4>
              <hr>
            <p>
              <i class="fas fa-quote-left"></i> Энэхүү төмөр савыг шатахуун түгээгүүрт газрын дээр  суурьлуулж ашиглахад нэн тохиромжтой. Мөн шатахуун түгээгүүрийн холболтын төхөөрөмжийг нэмэлтээр суурьлуулах боломжтой юм.</p>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
          </div>
        </div>
        <!--Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <div class="testimonial">
            <!--Avatar-->
            <div class="mx-auto mb-4 mt-5">
              <img src="assets/img/attachments/budaldag1.jpg" class="img-fluid"
                alt="Third sample avatar image" width="100%">
            </div>
            <!--Content-->
            <h4 class="font-weight-bold mb-4">3. Шатхууны зориулалт бүхий сав(Газрын доорх).</h4>
              <hr>
            <p>
              <i class="fas fa-quote-left"></i> Энэхүү төмөр савыг шатахуун түгээгүүрт газрын доор булж, суурьлуулж ашиглахад нэн тохиромжтой. Мөн шатахуун түгээгүүрийн холболтын төхөөрөмжийг нэмэлтээр суурьлуулах боломжтой юм.</p>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="far fa-star blue-text"> </i>
          </div>
        </div>
        <!--Third slide-->
      </div>
      <!--Slides-->
      <!--Controls-->
      <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
        data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
        data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--Controls-->
    </div>
    <!-- Carousel Wrapper -->
  </div>
          </div>
          <!--Card-->
        </div>
        <!--Grid column-->

        <div class="col-lg-3 col-md-3 mt-5 mb-5">
          <!--Card-->
          <div class="card testimonial-card">
            <div class="my-2 white">
              <img src="assets/img/attachments/watertank2.jpg" class="rounded-circle img-fluid" width="250px">
            </div>
            <div class="card-body">
              <!--Name-->
              <h4 class="font-weight-bold mb-4">Бохирын төмөр сав</h4>
              <hr>
              <!--Quotation-->
              <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Энэхүү төмөр сав нь бохирдлыг байгалд ээлтэй талаараа бусад төрлийн савнуудаас онцлогтой бөгөөд хүний биед үзүүлэх сөрөг нөлөөгүй нь тогтоогдсоноор бид өдөр тутмын хэрэгцээндээ буюу зуслангийн газар болон үйлдвэрүүдэд ашиглахад нэн тохиромжтой.</p>
            </div>
          </div>
          <!--Card-->
        </div>
        <!--Grid column-->

      </div>
      <!-- Grid row -->

    </section>
    <div id="message" class="container alert bg-danger text-white" role="alert">
      Бид таны хүсэл сонирхолд нийцүүлэн хэмжээний хувьд олон төрлийн сонголттойгоор хийж гүйцэтгэж байна.
    </div>

    <div class="balaizuraas" style="padding: 1em 2em;">
      <center>
        <hr class="rgba-black-light text-center" style="margin: 0 15%; width: 50%; height: 2px; border-radius: 10px;">
      </center>
    </div>
    <!--Google map-->
    <section id="contact" class="py-5 px-5 mt-5" style="background: #222">
      
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Card-->
          <div class="card card-cascade narrower">

            <div class="blue-gradient text-center py-4 text-white" style="font-weight: bold; border-radius: 5px; transform: translateY(-20px); width: 90%; margin: 0 auto;">
              <h5 class="mb-0">Холбоо барих</h5>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body card-body-cascade">

              <!--Google map-->
              <div id="map-container-google-8" class="z-depth-1-half map-container-5 py-4 px-5" style="height: 350px">
                <h6 class="black-text">Facebook: <span class="blue-text"><a href="https://www.facebook.com/oiltank.mn/" target="_blank">https://www.facebook.com/oiltank.mn/</a></span></h6>
                <h6 class="black-text">И-мэйл: <span class="blue-text"><a href="mailto:mutt.mn@gmail.com" target="_blank">mutt.mn@gmail.com</a></span></h6>
                <h6 class="black-text">Утас: <span class="blue-text"><a href="tel:+976 9600 4380">+976 9600 4380</a></span></h6>
                <h6 class="black-text">Хаяг: <span class="blue-text"><a target="_blank">Улаанбаатар хот Зүүн салаа</a></span></h6>
                
              </div>

            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Card-->
          <div class="card card-cascade narrower">

            <!--Card image-->
            <div class="peach-gradient text-center py-4 text-white" style="font-weight: bold; border-radius: 5px; transform: translateY(-20px); width: 90%; margin: 0 auto;">
              <h5 class="mb-0">Байршил</h5>
            </div>
            <div class="card-body card-body-cascade text-center">

                  <!--Google map-->
                  <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 350px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2197.2399772518415!2d106.82023942916153!3d47.981033817573596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDU4JzU0LjgiTiAxMDbCsDQ5JzE2LjgiRQ!5e1!3m2!1sen!2smn!4v1555861771038!5m2!1sen!2smn" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>


            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <footer class="page-footer font-small" style="background: #111">

      <!-- Footer Links -->
      <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#about">Бидний тухай</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#services">Бүтээгдэхүүн үйлчилгээ</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#contact">Холбоо барих</a>
            </h6>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

          <!-- Grid column -->
          <div class="col-md-8 col-12 mt-5">
            <h5 class="text-red" style="line-height: 1.7rem">Манай компаны веб хуудсаар зочилсон таньд баярлалаа.</h5>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

        <!-- Grid row-->
        <div class="row pb-3">

          <!-- Grid column -->
          <div class="col-md-12">

            <div class="mb-5 flex-center">

              <!-- Facebook -->
              <a class="fb-ic" href="https://www.facebook.com/oiltank.mn/">
                <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic" href="tel:+976 9600 4380">
                <i class="fas fa-phone fa-lg white-text mr-4"></i>
              </a>

            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
      <!-- Footer Links -->


      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Бүх эрх хуулиар хамгаалагдсан.
        <a href="https://mdbootstrap.com/education/bootstrap/"></a>
      </div>
    </footer>
    <!-- Section: Testimonials v.1 -->
  </main>
  <!-- Footer -->
    <!-- Footer -->
  <!--Main Layout-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <script type="text/javascript">
    new WOW().init();
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("fuck").style.display = "none";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("fuck").style.display = "block";
    }
    $(document).ready(function(){
      
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
  <script src="assets/js/jquery.notify.js"></script>
  <script type="text/javascript">
      $.notify({title :'Таньд энэ өдрийн мэнд хүргэе.', content:'Манай веб хуудаст тавтай морил.', timeout:5000});
  </script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>

</html>
