<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    const PER_PAGE = 10;

    public function index(int $page = 1)
    {
        if ($page <= 0) {
            $page = 1;
        }

        $offset = self::PER_PAGE * ($page - 1);

        $posts = Post::with('tags')
            ->live()
            ->orderByDesc('publish_date')
            ->offset($offset)
            ->limit(self::PER_PAGE)
            ->get();

        $total = Post::with('tags')
            ->live()
            ->count();

        return view('post.index', [
            'posts' => $posts,
            'currentPage' => $page,
            'isFirstPage' => $page === 1,
            'isLastPage' => $total - $offset < self::PER_PAGE
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::with('tags')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('post.show', [
            'post' => $post
        ]);
    }
}
