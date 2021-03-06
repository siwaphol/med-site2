<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MICROBIOLOGY</title>
  <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("css/custom.css")}}">

</head>
<body>

@include("partials._navbar")

<div class="container-fluid">
<!--CMU LOGO-->
<br><br>
<img  src="{{asset("images/logo.png")}}">
<br>
<!---end logo-->

@include("partials._navmenu")

    <!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <center>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset("images/micro_test.jpg")}}">
    </div>
    <div class="item">
      <img src="{{asset("images/micro_test.jpg")}}">
    </div>
    <div class="item">
      <img src="{{asset("images/micro_test.jpg")}}">
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
  </center>
</div>
<!-- end Carousel -->
  <br>
    <div class="row">

        @include("partials._sidemenu")

      <div class="col-md-10">
      <div class="row-md-6">
        <h4>Our Mission</h4>
          <p style="font-size: 14px;">The mission of the Department of Microbiology and Immunology is to conduct the best possible research and provide the most rigorous and inspiring training in the areas of microbiology, immunology, host-pathogen interaction and related fields. Through such activities, our goal is to improve human and animal health as well as to improve our ability to be responsible stewards of a fragile earth. Through this website, we hope to present an overview of our research and training activities and to inspire like-minded individuals to join us in our quest.
          <a href="#">More >></a>
          </p>
      </div>
      <hr>
      
      <div class="row-md-6">
        <h4>ABOUT US</h4>
          <p style="font-size: 12px;">The Department of Microbiology and Immunology is a community of over 200 individuals, all of whom share a common passion for research and learning. We have over 25 faculty among our ranks, ~50 graduate students, over 100 post-doctoral fellows, ~25 research, administrative and support staff and ~25 undergraduate and medical students working in labs. About 40% of our faculty have an M.D. and 70% a Ph.D. with most also holding joint appointments in other departments in the School.
              <br><br>
              The Department was founded almost 100 years ago and has gone by a number of names since that time, each reflecting a particular stage in the evolution of medicine and the life sciences. Our current name was granted by the University in 1987 when the Department made a major push to expand its focus into the complex interplay between microbe and host. This is a unifying theme that permeates the Department’s research and teaching and that only seems to be growing in relevance with each passing year.
          </p>
      </div>
      <hr>
      <br>
      <!-- news -->
      <hr>
      <div class="row-md-6">
      <h4>NEWS</h4>
      <hr>
        <div class="col-md-6">
        <center>
          <img src="{{asset("images/02.jpg")}}" width="300" height="258">
          <br>
          <h4>News Head</h4>
          <p style="font-size: 13px;">description</p>
          <hr>
        </center>
        </div>
        <div class="col-md-6">
        <center>
          <img src="{{asset("images/02.jpg")}}" width="300" height="258">
          <br>
          <h4>News Head</h4>
          <p style="font-size: 13px;">description</p>
          <hr>
        </center>
        </div>
        <div class="col-md-6">
        <center>
          <img src="{{asset("images/02.jpg")}}" width="300" height="258">
          <br>
          <h4>News Head</h4>
          <p style="font-size: 13px;">description</p>
          <hr>
        </center>
        </div>
        <div class="col-md-6">
        <center>
          <img src="{{asset("images/02.jpg")}}" width="300" height="258">
          <br>
          <h4>News Head</h4>
          <p style="font-size: 13px;">description</p>
          <hr>
        </center>
        </div>
      </div>
      <!--end news-->

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