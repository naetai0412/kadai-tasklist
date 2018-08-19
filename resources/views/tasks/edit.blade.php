@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
<div class="row">
 <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12　col-lg-offset-3 col-md-offset-2 col-sm-offset-2">

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
           {!! Form::label('title', 'ステータス:') !!}
           {!! Form::text('title',null,['class' => 'form-control']) !!}
        </div>
        
    <div class="form-group">
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content',null, ['class' => 'form-control']) !!}
    </div>

        {!! Form::submit('更新',['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
 </div>
</div>
@endsection