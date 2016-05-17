@extends('second_template')

@section('title', 'Create New Staff')

@section('body_class', 'browse')

@section('content')
    <section class="banner">
        <div class="container">
            <div class="row-fluid"></div>
        </div>
    </section>

    {!! Form::open(array('url' => 'profile/store', 'method'=>'post', 'files'=> true)) !!}
    <div class="form-group">
        {!! Form::label('First Name') !!}
        {!! Form::text('first_name_en', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'First Name')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Last Name') !!}
        {!! Form::text('last_name_en', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Last Name')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
@endsection

@section('script')

@endsection