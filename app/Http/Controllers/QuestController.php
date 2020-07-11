<?php

namespace App\Http\Controllers;

use App\Quest;
use App\CommentQuestion as Comment;
use App\User;

use Illuminate\Http\Request;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('quest.indexa', compact('data'));
        $quests = Quest::all();
        return view('quest.index', compact('quests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quest.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $quest = new Quest;
        $quest->title = $request->title;    
        $quest->content = $request->content; 
        $quest->user_id = $request->user_id;  
        $quest->save(); 

        return redirect('/quest')->with('success','Create data berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // dd($data);
        // return view('quest.showa', compact('data','comment'));
        $quest = Quest::find($id);
        $user = User::find($quest->user_id);

        return view('quest.show', compact('quest','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function edit(Quest $quest, $id)
    {
        //
        $quest = Quest::find($id);

        return view('quest.edit', compact('quest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quest $quest, $id)
    {
        //
        $quest = Quest::find($id);
        $quest->title = $request->title;    
        $quest->content = $request->content; 
        $quest->user_id = $request->user_id;          
        $quest->save();

        return redirect('/quest')->with('success','Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quest $quest, $id)
    {
        //
        $quest = Quest::find($id);
        $quest->delete();
        return redirect('/quest')->with('success','Delete data berhasil!');
    }
}
