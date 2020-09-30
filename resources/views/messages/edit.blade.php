@extends('layouts.app')

@section('content')
    
    <h1>投稿編集ページ</h1>

    <div class="row">
        <div class="offset-sm-4 col-sm-4">
            {{-- エラーメッセージ --}}
            @include('commons.error_message')
            
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', '本文:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('この投稿を更新する', ['class' => 'btn btn-primary btn-block mt-sm-4']) !!}
            {!! Form::close() !!}
            
            <p class="text-center mt-sm-4">OR</p>
            {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                {!! Form::submit('この投稿を削除する', ['class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection