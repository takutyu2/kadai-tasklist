@extends('layouts.app')

@section('content')

    <h1>タスク新規作成</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'タスク内容：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('追加') !!}
        
    {!! Form::close() !!}

@endsection