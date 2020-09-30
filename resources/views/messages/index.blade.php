@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- エラーメッセージ --}}
            @include('commons.error_message')
            
            <h2>新規投稿</h2>

            {!! Form::model($message, ['route' => 'messages.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', '投稿者:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! Form::label('content', '本文:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
        
            {!! Form::close() !!}
        </aside>
        <div class="col-sm-8">
            @if(session()->has('alert'))
                <div class="alert alert-info mb-3">
                    {{session('alert')}}
                </div>
            @endif
            
            <h2>投稿一覧</h2>

            @if (count($messages) > 0)
                @foreach ($messages as $message)
                    <div class="card">
                        <div class="card-header">
                            [{{ $message->name }}] /
                            [{{ $message->created_at }}]
                            {!! link_to_route('messages.edit', '編集', ['message' => $message->id],  ['class' => 'btn btn-secondary btn-sm']) !!}
                        </div>
                        <div class="card-body">
                            {{ $message->content }}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection