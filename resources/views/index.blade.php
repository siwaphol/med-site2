<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>MICROBIOLOGY</title>
  <link rel="stylesheet" href="{{asset("css/custom-bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("css/custom.css")}}">


<!--new-->
<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
<!-- ION ICONS STYLES -->
<link rel="stylesheet" href="{{asset("css/ionicons.css")}}">
<!-- FONT AWESOME ICONS STYLES -->
<link rel="stylesheet" href="{{asset("css/font-awesome.css")}}">
<!-- FANCYBOX POPUP STYLES -->
<link rel="stylesheet" href="{{asset("js/jquery.fancybox.css")}}">
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link rel="stylesheet" href="{{asset("css/animations.min.css")}}">
<!-- CUSTOM CSS -->
<link rel="stylesheet" href="{{asset("css/style-blue.css")}}">
<!--end new css-->


</head>
<body>

@include("partials._navbar")

<div class="container-fluid">
<!--CMU LOGO-->
<br><br>
<img  src="{{asset("images/logo.png")}}">
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