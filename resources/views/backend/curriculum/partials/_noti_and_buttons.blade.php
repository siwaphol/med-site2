    @if (Session::has('flash_notification.message'))
        <div class="alert alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {{ Session::get('flash_notification.message') }}
        </div>
    @endif

    <a class="btn btn-default" href="{{url('admin/curriculum/medicine/edit')}}">Medicine</a>
    <a class="btn btn-default" href="{{url('admin/curriculum/master/edit')}}">Master</a>
    <a class="btn btn-default" href="{{url('admin/curriculum/doctor/edit')}}">Doctor</a>
    <a class="btn btn-default" href="{{url('admin/curriculum/inter/edit')}}">Inter</a>