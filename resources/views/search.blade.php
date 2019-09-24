@extends('layouts.app')

@section('content')


<h1>Result of Posts</h1>

<div class="container">
    @if(isset($details))
        <p> The Search results for your KEYWORD <b> {{ $query }} </b> are :</p>
        <h2>Sample Posts details</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
            @foreach($details as $post)
                <tr>
                    <td><a href="/posts/{{$post->id}}" >{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
