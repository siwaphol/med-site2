@extends("index")

@section('content')
    {!! Form::open(['url'=>'course/store', 'method'=>'post']) !!}
    <h1>เพิ่มกระบวนวิชาใหม่</h1>
    {!! Form::label('code','รหัสกระบวนวิชา') !!}
    {!! Form::text('code') !!}
    {!! Form::label('name_th','ชื่อภาษาไทย') !!}
    {!! Form::text('name_th') !!}
    {!! Form::label('name_en','ชื่อภาษาอังกฤษ') !!}
    {!! Form::text('name_en') !!}
    {{--<h2>ข่าวประกาศ</h2>--}}
    {{--{!! Form::label('announcement') !!}--}}
    {{--{!! Form::textarea('announcement') !!}--}}
    {{--<h2 >เวลาเรียน</h2>--}}
    {{--{!! Form::label('time') !!}--}}
    {{--{!! Form::textarea('time') !!}--}}
    {{--<h2>ตารางสอบ</h2>--}}
    {{--{!! Form::label('exam_schedule') !!}--}}
    {{--{!! Form::textarea('exam_schedule') !!}--}}
    {{--<h2>หลักเกณฑ์การให้คะแนน</h2>--}}
    {{--<h2>แผนการสอนและเอกสารประกอบการสอน</h2>--}}
    {{--{!! Form::label('files') !!}--}}
    {{--{!! Form::text('file_name') !!}--}}
    {{--{!! Form::file('files') !!}--}}
    {{--<h2>ภาคการศึกษาก่อนหน้า</h2>--}}
    {{--{!! Form::label('history') !!}--}}
    {{--{!! Form::textarea('history') !!}--}}
    <input type="submit" class="btn btn-success" value="Submit">
    {!! Form::close() !!}
@endsection