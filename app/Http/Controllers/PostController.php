<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Posts/Index', ['posts' => $posts]);
    }

     // Show form to create a new post
     public function create()
     {
         return Inertia::render('Posts/Create');
     }

      // Store new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create($request->only('title', 'content'));

        return redirect()->route('posts.index');
    }

    // Show a single post
    public function show(Post $post)
    {
        return Inertia::render('Posts/Show', ['post' => $post]);
    }

    // Show form to edit a post
    public function edit(Post $post)
    {
        return Inertia::render('Posts/Edit', ['post' => $post]);
    }

     // Update a post
     public function update(Request $request, Post $post)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'content' => 'required|string',
         ]);

         $post->update($request->only('title', 'content'));

         return redirect()->route('posts.index');
     }

     // Delete a post
     public function destroy(Post $post)
     {
         $post->delete();
         return redirect()->route('posts.index');
     }

}
