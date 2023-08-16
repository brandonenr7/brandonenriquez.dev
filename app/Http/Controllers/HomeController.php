<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $posts = Post::with('user')
            ->latest()
            ->paginate(perPage: 6);

        return view('home', compact('posts'));
    }
}
