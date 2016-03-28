<!DOCTYPE html>
<html lang="en">

@include("partials._headcss")

<body>

@include("partials._navbar")

<div class="container-fluid">
<!--CMU LOGO-->
<a href="{{url("/")}}">
      <img  src="{{asset("images/logo2.png")}}"   width="400" height="100">
</a>
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