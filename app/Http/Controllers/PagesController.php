<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(1);
        return view('face.index', ['categories' => $categories]);
    }

    public function category($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->first();
        return view('face.category', ['category' => $category]);
    }

    public function post($categorySlug, $postSlug)
    {
        $category = Category::where('slug', $categorySlug)->first();
        $post = Post::where('slug', $postSlug)->first();
        if ($category->exists()
            && $post->exists()
            && $post->category_id == $category->id) {
            return view('face.post', compact('post'));
        }
        abort(404);
    }
}
