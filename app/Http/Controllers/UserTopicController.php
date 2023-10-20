<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTopicController extends Controller
{
    public function index(Request $request)
    {
        $topics = $request->user()->topics()->orderBy('created_at', 'desc')->get();

        return view('user.topics.index', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->user()->topics()->create([
        //     'title' => 'topic 3'
        // ]);

        $topic = new \App\Models\Topic();
        $topic->title = 'topic 88';
        $topic->user()->associate($request->user());
        $topic->save();
    }
}
