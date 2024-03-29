<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use DB;
class PostsController extends Controller
{   
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    Route::get('posts/index', function(){
        $category = Input::get('category');
        
        $post = DB::table('posts')->where('category', $category);
        
        return view('posts/index')->with($post);
     });
     */
    public function index(Request $request)
    {
        $flag = $request->query('caregory');
        //$flag = Input::get('category');
        if($flag == NULL)
        {
            $post =  Post::orderBy('created_at', 'desc')->paginate(10);
            return view('posts.index')->with('posts', $post);  
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'body' => 'required','cover_image' => 'image|nullable|max:1999'] );
        if($request->hasFile('cover_image')) {
            // Get filename with extension            
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
           // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;                       
          // Upload Image
            $path = $request->file('cover_image')-> storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        //check for correct user 
        if( (auth()->user()->id  !== $post->user_id) && (auth()->user()->ifAdmin == 0) ) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
            
        }
        
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required', 'body' => 'required'] );

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);


         //check for correct user 
         if( (auth()->user()->id  !== $post->user_id) && (auth()->user()->ifAdmin  == 0)  ) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
            
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }


}
