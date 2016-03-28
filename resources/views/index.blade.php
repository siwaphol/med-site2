<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>MICROBIOLOGY</title>
  <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("css/custom-bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("css/custom.css")}}">


</head>
<body>

@include("partials._navbar")

<div class="container-fluid">
<!--CMU LOGO-->
<br><br>
<img  src="{{asset("images/logo2.png")}}" width="240" height="60">
<br>
<!---end logo-->

@yield("carousel")

  <br>
    <div class="row">

        @include("partials._sidemenu")

        @yield("content")
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