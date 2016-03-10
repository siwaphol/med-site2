<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>MICROBIOLOGY</title>
  <link rel="stylesheet" href="{{asset("css/custom-bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("css/custom.css")}}">

</head>
<body>
  
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-xs">
    <div class="container">
      <div class="navbar-header navbar-right">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav> <!-- end fixed navbar -->


<div class="container-fluid">
<!--CMU LOGO-->
<br><br>
<img  src="{{asset("images/cmu_logo.jpg")}}">
<br>
<!---end logo-->


    <!--Tab Home,Faculty,Researcgh,Seminar,Contact Us-->
    <div class="row visible" id="navmenu">
      <nav>
        <ul class="nav nav-justified">
          <li style="font-size:11px"><a href="#">Home</a></li>
          <li style="font-size:11px"><a href="#">Faculty & Staff</a></li>
          <li style="font-size:11px"><a href="#">Research</a></li>
          <li style="font-size:11px"><a href="#">Education & Training</a></li>
          <li style="font-size:11px"><a href="#">Seminars</a></li>
          <li style="font-size:11px"><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </div> <!-- End div.menu -->


    <!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset("images/test.jpg")}}">
    </div>
    <div class="item">
      <img src="{{asset("images/test.jpg")}}">
    </div>
    <div class="item">
      <img src="{{asset("images/test.jpg")}}">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end Carousel -->



    <!-- Breadcrum to show curren page -->
    <div class="row" id="breadcrum">
      <ol class="breadcrumb">
        <li><a href="#">Medicine</a></li>
        <li><a href="#">Department</a></li>
      </ol>
    </div> <!-- End div.breadcrum -->

    <div class="row">
      <!-- List Manu Left-->
      <div class="col-md-2">
      <h4 style="font-size: 18px;">MICROBIOLOGY <!--Head-->
      </h4>
      <ul class="nav nav-tabs nav-stacked">
        <li><a href="#">Home</a></li>
        <li><a href="{{url('browse')}}">Faculty</a></li>
        <li><a href="#">Department Faculty</a></li>
        <li><a href="#">Administrative Staff</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Research</a></li>
        <li><a href="#">Education & Training</a></li>
        <li><a href="#">Seminars</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      
      </div>
      <!--End List-->
      <div class="col-md-10">

      <div class="row-md-6">
        <h4>Our Mission</h4>
        <br><hr><br>
          <p style="font-size: 14px;">The mission of the Department of Microbiology and Immunology is to conduct the best possible research and provide the most rigorous and inspiring training in the areas of microbiology, immunology, host-pathogen interaction and related fields. Through such activities, our goal is to improve human and animal health as well as to improve our ability to be responsible stewards of a fragile earth. Through this website, we hope to present an overview of our research and training activities and to inspire like-minded individuals to join us in our quest.
          <a href="#">More >></a>
          </p>
        
      </div>
      
      <div class="row-md-6">
        <h4>ABOUT US</h4>
        <br><hr><br>
          <p style="font-size: 10px;">The Department of Microbiology and Immunology is a community of over 200 individuals, all of whom share a common passion for research and learning. We have over 25 faculty among our ranks, ~50 graduate students, over 100 post-doctoral fellows, ~25 research, administrative and support staff and ~25 undergraduate and medical students working in labs. About 40% of our faculty have an M.D. and 70% a Ph.D. with most also holding joint appointments in other departments in the School.
              <br><br>
              The Department was founded almost 100 years ago and has gone by a number of names since that time, each reflecting a particular stage in the evolution of medicine and the life sciences. Our current name was granted by the University in 1987 when the Department made a major push to expand its focus into the complex interplay between microbe and host. This is a unifying theme that permeates the Department’s research and teaching and that only seems to be growing in relevance with each passing year.
          </p>
        
      </div>
      </div>
    </div>
    
    <!--List Bottom-->
    <ul class ="pager">
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Maps & Directions</a></li>
    </ul>
  </div>
  <script src="{{asset("js/jquery.min.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>