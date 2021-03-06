@extends('index')

@section('content')

@include('backend.curriculum.partials._noti_and_buttons')

    <section class="content-header">
        <h1> Curriculum <small> | Edit Curriculum For {{$curriculum->category}}</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/curriculum') !!}"><i class="fa fa-bookmark"></i> Curriculum</a></li>
            <li class="active">Edit  Curriculum</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">
    {!! Form::open(array('route' => array('admin.curriculum.update', $curriculum->category),'method'=>'PATCH')) !!}
        <input type="hidden" name="category" value="{{$curriculum->category}}">
        <input type="hidden" name="period" value="{{$curriculum->period}}">
    <!-- Title -->
        {{--<div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">--}}
            {{--<label class="control-label" for="title">Title</label>--}}

            {{--<div class="controls"> {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title',--}}
                {{--'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}--}}
                {{--@if ($errors->first('title')) <span class="help-block">{!! $errors->first('title') !!}</span> @endif--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}
        <!-- Datetime -->
        {{--<div class="control-group {!! $errors->has('datetime') ? 'has-error' : '' !!}">--}}
            {{--<label class="control-label" for="title">Datetime</label>--}}

            {{--<div class="controls"> {!! Form::text('datetime', null, array('class'=>'form-control', 'id' => 'datetime',--}}
                {{--'value'=>Input::old('datetime'))) !!}--}}
                {{--@if ($errors->first('datetime'))--}}
                    {{--<span class="help-block">{!! $errors->first('datetime') !!}</span> @endif </div>--}}
        {{--</div>--}}
        {{--<br>--}}
        <!-- Content -->
        <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Content</label>

            <div class="controls"> {!! Form::textarea('content', $curriculum->content, array('class'=>'form-control', 'id' => 'content',
                'placeholder'=>'Content', 'value'=>Input::old('content'))) !!}
                @if ($errors->first('content')) <span class="help-block">{!! $errors->first('content') !!}</span> @endif
            </div>
        </div>
        <br>
        <!-- Image -->
        {{--<div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">--}}
            {{--<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>--}}
            {{--<div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span> {!! Form::file('image', array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}--}}
                    {{--@if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span>--}}
                {{--<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a></div>--}}
        {{--</div>--}}
        {{--<br>--}}
        <!-- Published -->
        {{--<div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">--}}
            {{--<div class="controls">--}}
                {{--<label class="">{!! Form::checkbox('is_published', 'is_published') !!} Publish ?</label>--}}
                {{--@if ($errors->first('is_published'))--}}
                    {{--<span class="help-block">{!! $errors->first('is_published') !!}</span> @endif </div>--}}
        {{--</div>--}}
        <br> {!! Form::submit('Create', array('class' => 'btn btn-success')) !!} {!! Form::close() !!}
@endsection

@section('script')
    {!! Html::script('ckeditor/ckeditor.js') !!}
    <script type="text/javascript">
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
@endsection