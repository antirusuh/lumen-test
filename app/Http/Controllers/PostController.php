<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll()
    {
        return Post::all(['post_id', 'title', 'body']);
    }

    public function createPost(Request $req)
    {
        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

        return response()->json([
            'status' => 'success',
            'message' => 'hello',
        ]);
    }
}
