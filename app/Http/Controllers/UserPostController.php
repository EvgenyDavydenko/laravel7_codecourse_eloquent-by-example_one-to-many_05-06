<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(Request $request)
    {
        $posts = $request->user()->posts()->orderBy('created_at', 'desc')->get();

        return view('user.posts.index', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $topic = \App\Models\Topic::find(4);

        $post = new \App\Models\Post;
        $post->body = 'post444 to topic4';
        $post->user()->associate($request->user());

        $post->topic()->associate($topic);
        $post->save();    
        // $topic->posts()->save($post);

    }
}
