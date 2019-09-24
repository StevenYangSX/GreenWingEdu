<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;
use App\Post;
use App\User;

//route for view controllers.
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/signup','PagesController@signup');
Route::get('/student', 'PagesController@student');

Route::resource('posts', 'PostsController');
Route::get('/search', function(){
   $q = Input::get('q');
   if($q != " "){
       $post = Post::where('title', 'LIKE', '%' . $q . '%')
                    ->get();
        if(count($post) > 0){
            return view('search')->withDetails($post)->withQuery($q);
        }
   }
   return view('search')->withMesssage("no posts found");
});

Route::get('/search', function(){
    $q = Input::get('q');
    if($q != " "){
        $post = Post::where('title', 'LIKE', '%' . $q . '%')
                     ->get();
         if(count($post) > 0){
             return view('search')->withDetails($post)->withQuery($q);
         }
    }
    return view('search')->withMesssage("no posts found");
 });


//route for comments
//Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' =>'comments.store']);

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


//Route::resource('comment', 'CommentController',['only'=>['destroy', 'update']]);
//Route::post('comment/create/{post}', 'PostsController@store')->name('postcommentstore');

Route::get('/tutorial', 'TutorialController@index');

Route::get('/activity', 'ActivityController@index');

Route::get('/profile', 'ProfileController@index');

Route::post('change/password', function(){
    $user = User::find(Auth::user()->id);

    if(Input::get('password') == Input::get('password_confirmation')){
        $user->password = bcrypt(Input::get('password'));
        $user -> save();
        return back()->with('success', 'password changed');
    }
    else{
        return back()->with('error', 'password not changed');
    }
});



Route::get('/searchcategory', function(){
    $q = Input::get('category');
        if($q == "all") {
            $post = DB::table('posts')->get();
            return view('search')->withDetails($post)->withQuery($q);
        }
        if($q != null) {
        $post = Post::where('category', $q)
                     ->get();
         if(count($post) > 0){
             return view('search')->withDetails($post)->withQuery($q);
         }
        }
    
});


Route::get('/information', 'InformationController@index');



