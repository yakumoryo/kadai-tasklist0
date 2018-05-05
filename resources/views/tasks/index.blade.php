@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

            <h1>タスク一覧</h1>
            
            @if (count($tasks) > 0)
            <ul>
                @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} :{{ $task->status }} > {{ $task->content }}</li>
                @endforeach
            </ul>
            @endif
            
            {!! link_to_route('tasks.create', '新規タスクの投稿') !!}
            
        </div>
    </div>
@endsection