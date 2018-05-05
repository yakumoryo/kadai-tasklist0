@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            
            <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
            
            <p>ステータス : {{ $task->status }}</p>
            <p>タスク : {{ $task->content }}</p>
            
            {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
            
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            
            {!! Form::submit('削除') !!}
            
            {!! Form::close() !!}
        
        </div>
    </div>
@endsection