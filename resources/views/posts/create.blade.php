@extends('layouts.app')

@section('content')

<h1>Create Posts</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title','',['class' => 'fomr-control', 'placeholder'=> 'Title'])}}
    </div>


    <div class="form-group">
        {{Form::label('category', 'Category')}}
       {{Form::select('category',['All'=>'all', 'tutorial'=>'Tutorial', 'rateprof' => 'Rate 
       Professor' , 'activity'=>'Activity'])}}
    </div>


    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body','',['id'=>'article-ckeditor','class' => 'fomr-control', 'placeholder'=> 'Body Test'])}}
    </div>

        {{ csrf_field() }}
    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection