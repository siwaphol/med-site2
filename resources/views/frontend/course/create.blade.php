@extends("index")

@section('content')
    {!! Form::open(['url'=>'course/store', 'method'=>'post']) !!}
    <h1>ชื่อ กระบวนวิชา</h1>
    {!! Form::label('code') !!}
    {!! Form::text('code') !!}
    {!! Form::label('name') !!}
    {!! Form::text('name') !!}
    <h2>ข่าวประกาศ</h2>
    {!! Form::label('announcement') !!}
    {!! Form::textarea('announcement') !!}
    <h2 >เวลาเรียน</h2>
    {!! Form::label('time') !!}
    {!! Form::textarea('time') !!}
    <h2>ตารางสอบ</h2>
    {!! Form::label('') !!}
    <h2>หลักเกณฑ์การให้คะแนน</h2>
    <h2>แผนการสอนและเอกสารประกอบการสอน</h2>
    <h2>ภาคการศึกษาก่อนหน้า</h2>
    {!! Form::close() !!}
@endsection