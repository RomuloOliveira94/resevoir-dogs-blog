<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Deck;
use App\Models\Post;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view(
            'posts.index',
            [
                'categories' => Category::whereHas('posts', function ($query) {
                    $query->published();
                })->take(10)->get(),
            ]
        );
    }

    public function show(Post $post/*, Deck $deck*/)
    {
        return view(
            'posts.show',
            [
                'post' => $post,
                /*'deck' => $deck*/
            ]
        );
    }
}
