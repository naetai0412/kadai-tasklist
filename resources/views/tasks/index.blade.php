@extends('layouts.app')

@section('content')

    <h1>メッセージ一-覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->title }} > {{ $task->content }}</li>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                </tr>        
            @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create','新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection

