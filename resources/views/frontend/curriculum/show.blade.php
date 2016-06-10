@extends('index')

@section('content')

@include('backend.curriculum.partials._noti_and_buttons')

<div class="row">
  <div class="col-md-10">
      <div class="form-group">
          <a class="btn btn-default" href="{{url("admin/curriculum/medicine/edit")}}">Edit curriculum</a>
      </div>
      <table class="table" style="background-color: #8e44ad; color: #ffffff;">
          <tr>
              <th><span style="font-weight:normal;">HOME &gt; </span>CURRICULUM</th>
          </tr>
      </table>
  </div>
</div>
<br>
<div class="container">
{!!$curriculum->content!!}
</div>

@endsection

@section('script')

@endsection