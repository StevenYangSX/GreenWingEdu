
@extends('layouts.app')



@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/common.css') }}" />  
</head>

<h1>{{$post->title}}</h1>


@endsection