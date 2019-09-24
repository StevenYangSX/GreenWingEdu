@extends('layouts.app')

@section('content')



<a href="/posts/create" class="btn btn-primary" style="margin-left:93%;">Create Post</a>
<br><br><br>


<form action="/search" method="GET" role="search">
{{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search"> 
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Search</button>
        </span>
    </div>
</form>


<form  action="/searchcategory" method='GET' >Category
    
    <select name="category">
      <option value="all">All</option>
      <option value="tutorial">Tutorial</option>
      <option value="activity">Activity</option>
      <option value="rateprof">Rate Professor</option>
    </select>

    <button type='submit' class="btn btn-primary">Go</button>
</form>





@if(count($posts) > 0) 
    
        @foreach($posts as $post)
            
            <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}} </a></h3>
            <small>Post on {{$post->created_at}} by {{$post->user['name']}}</small>
            </div>
          

        
        @endforeach
    

    

        {{$posts->links()}}


    
@else
    <p>No posts yet.</p>
@endif

@endsection