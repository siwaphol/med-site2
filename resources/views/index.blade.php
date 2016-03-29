<!DOCTYPE html>
<html lang="en">

@include("partials._headcss")

<body>
  <div class="row">
      @include("partials._navbar")
  </div>

  <div class="container-fluid">
    <!--CMU LOGO-->
    <div class="row">
      <a href="{{url("/")}}"><img  src="{{asset("images/main_logo.png")}}" style="height: 100px;margin-left: 50px;margin-top: 5px;margin-bottom: 5px;"> </a>
    </div>
    <!---end logo-->

    @yield("carousel")

    <br>
    <div class="row">
      <div class="col-md-2" id="hoe-left-panel">
        @include("partials._sidemenu")
      </div>
      <div class="col-md-10">
        @yield("content")
      </div>
    </div>

    <div class="row">
        <ul class ="pager col-md-12">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Maps & Directions</a></li>
        </ul>
    </div>
    
    <!--List Bottom-->
  </div>
  <script src="{{asset("js/jquery.min.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/hoe.js")}}"></script>

</body>
</html>