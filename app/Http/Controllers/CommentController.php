<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $comment = new Comment();

        $comment->content = $request->input('content');
        $comment->post_id = $id;

        $comment->save();

        return redirect()->route('posts.show', ['id' => $id])->with('message', 'Item created successfully.');
    }
}
