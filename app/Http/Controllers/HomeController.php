<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $pages = Page::
            with('categoryId')
            ->latest()
            ->whereHas('categoryId', function ($query) {
                $query->whereHas('parentId', function ($query) {
                    $query->where('name', 'Local Moving');
                });
            })
//            ->where('tomname', '=', 'Local Moving')
//            ->whereNull('bosname')
            ->where('status', 1)
            ->get();

        $posts = Post::latest()
            ->take(3)
            ->get();

        return view('home', compact('posts', 'pages'));
    }
}
