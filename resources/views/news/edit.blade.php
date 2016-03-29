@extends("index")

@section('content')
    <h1>News & Announcement</h1>

    <ul>
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </ul>

    @if(Session::has('message'))
        <div class="alert alert-info">
            {{Session::get('message')}}
        </div>
    @endif

    @if(isset($message) && !empty($message))
        <div class="alert alert-info">
            {{$message}}
        </div>
    @endif

    {!! Form::model(array('route' => 'news_store', 'class' => 'form', 'files'=> true)) !!}

    <div class="form-group">
        {!! Form::label('Headline') !!}
        {!! Form::text('headline', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Headline')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Your Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your message')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Image') !!}
        {!! Form::file('image',
            array('required',
                  'class'=>'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Start Date') !!}
        {!! Form::date('start_date', \Carbon\Carbon::now(),
            array('required',
                      'class'=>'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('End Date') !!}
        {!! Form::date('end_date', \Carbon\Carbon::now(),
            array('required',
                      'class'=>'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
@stop