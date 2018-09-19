<?php

namespace HDev\Blog\Http\Controllers;

use HDev\Blog\Entities\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog::index', compact('posts'));
    }
}
