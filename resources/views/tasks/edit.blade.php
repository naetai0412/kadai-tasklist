@extends('layouts.app')

@section('content')

@if Auth::user()
    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
  
<div class="row">
 <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12　col-sm-offset-2 col-md-offset-2 col-lg-offset-3">

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
           {!! Form::label('status', 'status:') !!}
           {!! Form::text('status',null,['class' => 'form-control']) !!}
        </div>
        
    <div class="form-group">
        {!! Form::label('content', 'content:') !!}
        {!! Form::text('content',null, ['class' => 'form-control']) !!}
    </div>

        {!! Form::submit('更新',['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
@else
    <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
    <li>{!! link_to_route('login', 'Login') !!}</li>
@endif    

 </div>
</div>
@endsection

 
                        
