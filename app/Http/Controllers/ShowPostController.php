<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class ShowPostController extends Controller
{
    /**
     * Show an individual post.
     * 
     * @param \App\Models\Post $post
     */
    public function __invoke(Post $post): View
    {
        return view('posts.show', compact('post'));
    }
}
