<?php

namespace App\Http\Controllers;

use App\CommentQuestion as Coment;
use Illuminate\Http\Request;
use Auth;

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
    public function store(Request $request, $id)
    {
        $data=$request->all();
        $new_comment = Coment::create([
            'user_id' =>Auth::user()->id,
            'quest_id' => $id,
            'content_comment' => $data["content"]
        ]);
        return redirect('/pertanyaan/'.$id);
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
    public function destroy(CommentQuestion $commentQuestion)
    {
        //
    }
}
