@extends('layouts.app')

@section('content')


<h1>Create Posts</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id] , 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title',$post->title,['class' => 'fomr-control', 'placeholder'=> 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class' => 'fomr-control', 'placeholder'=> 'Body Test'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection