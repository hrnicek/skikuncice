<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        return inertia('Posts/Index');
    }

    public function show(Post $post)
    {
        return inertia('Posts/Show', [
            'post' => $post,
        ]
        );
    }
}
