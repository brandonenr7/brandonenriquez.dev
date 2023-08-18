<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;

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

        $projects = Project::orderByDesc('featured')
            ->where('visible', true)
            ->get();

        return view('home', compact('posts', 'projects'));
    }
}
