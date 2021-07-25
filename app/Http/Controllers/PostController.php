<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class PostController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderByDesc('publish_date')
            ->paginate(10);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function show(string $slug)
    {
        $post = WinkPost::with('tags')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('blog.show', [
            'post' => $post
        ]);
    }
}
