<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs(Request $request) {

        $posts = Post::latest()->paginate(9);
        return view('blogs', compact('posts'));
    }

    public function post(Request $request, $slug) {

//        $imagePages = Post::all();
//
//        foreach ($imagePages as $imagePost) {
//            $body = \Str::replace('/storage/images/blog/desk/', '/storage/posts/', $imagePost->body);
//            $imagePost->body = $body;
//            $imagePost->save();
//
//        }

        $post = Post::where('slug', $slug)->firstOrFail();

        $posts = Post::inRandomOrder()->limit(3)->get();

        return view('post', compact('post', 'posts'));
    }
}
