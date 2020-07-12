<?php

namespace App\Http\Controllers;

use App\CommentQuestion as Comment;
use Illuminate\Http\Request;
use Auth;
use App\Quest;

class CommentQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        
        $comment = new Comment;
        $comment->content_comment = $request->get('content');
        $comment->user()->associate($request->user());
        $post = Quest::find($request->get('quest_id'));
        $post->comments()->save($comment);
        // return redirect('/pertanyaan/'.$id);
        return back();
    }
   
    public function replyStore(Request $request)
    {
        // dd($request->all());
        $reply = new Comment();
        $reply->content_comment = $request->get('content');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Quest::find($request->get('quest_id'));

        $post->comments()->save($reply);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentQuestion  $commentQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(CommentQuestion $commentQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentQuestion  $commentQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentQuestion $commentQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentQuestion  $commentQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentQuestion $commentQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentQuestion  $commentQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment_parent = Comment::where('parent_id',$id)->delete();
        
        // dd($comment_parent);
        $comment->delete();

        return back();
    }
}
