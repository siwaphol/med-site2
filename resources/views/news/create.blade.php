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

{!! Form::open(array('route' => 'news_store', 'class' => 'form', 'files'=> true)) !!}

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
    {!! Form::file('image', null, 
        array('required', 
              'class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
@stop