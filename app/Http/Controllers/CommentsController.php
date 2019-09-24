<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addPostComment(Request $request, Post $post) {
        $this->validate($request, ['body' => 'required']);

        $comment = new Comment();

        $comment->body = $request->body;
        $comment->user_id = auth()->id;

        $comment->comments()->save($comment);
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
