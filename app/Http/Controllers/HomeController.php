<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'posts' => Post::with('tags:id,name')->addSelect([
                'category' => Category::select('name')->whereColumn('category_id', 'categories.id')->limit(1),
            ])->get(),
        ]);
    }
}
