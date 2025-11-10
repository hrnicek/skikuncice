<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        seo()->title('Aktuality');

        return inertia('Posts/Index');
    }

    public function show(Post $post)
    {
        seo()->title($post->title);

        return inertia('Posts/Show', [
            'post' => $post,
        ]
        );
    }
}
