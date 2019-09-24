@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-default">Back</a>
<h1>{{$post->title}}</h1>
@if($post->cover_image != "noimage.jpg")
<div>
    {!!$post->body!!}
    <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
    
</div>


<hr>
<small>Post on {{$post->created_at}} by {{$post->user['']}}</small>
<hr>
@endif



@if(!Auth::guest() )

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://greenwingedu.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    @if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id ], 'method' => 'POST', 
                    'class' =>  'pull-right'])!!}

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger']) }}

    

{!!Form::close()!!}


                            


@endif
@endif





@endsection