<!DOCTYPE html>
<html lang="en">

@include("partials._headcss")

<body>
  @include("partials._navbar")

  <div class="container-fluid">
    <!--CMU LOGO-->
    <div class="row">
      <a href="{{url("/")}}"><img  src="{{asset("images/main_logo.png")}}" class="img-responsive">
      </a>
    </div>
    <!---end logo-->

    @yield("carousel")

    <br>
    <div class="row">
      <div class="col-md-2" id="hoe-left-panel">
        @include("partials._sidemenu")
      </div>
      <div class="col-md-10">
          @if (isset($errors)&&count($errors) > 0)
              <div class="alert alert-danger">
                  <strong>Whoops!</strong><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
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