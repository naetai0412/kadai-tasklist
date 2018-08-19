@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
<div class="row">
    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12　col-lg-offset-3 col-md-offset-2 col-sm-offset-2">
       
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
      <div class="form-group">  
        {!! Form::label('title','タイトル:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>
</div>
@endsection