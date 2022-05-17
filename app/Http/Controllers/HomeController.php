<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'posts' => Post::addSelect([
                'category' => Category::with('tags:id,name')->select('name')->whereColumn('category_id', 'categories.id')->limit(1),
            ])->get(),
        ]);
    }
}
