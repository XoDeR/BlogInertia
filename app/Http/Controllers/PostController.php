<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    public function index()
    {
        /*
        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(20);

        return view('posts.index', ['posts' => $posts]);
        */

        return Inertia::render('Posts/Index', [
            //
        ]);
    }

    public function show(Post $post)
    {
        /*
        return view('posts.show', ['post' => $post]);
        */
    }

    public function store(Request $request)
    {
        /*
        $validated = $request->validate([
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();
        */
    }

    public function startEdit(Post $post)
    {
        /*
        Gate::authorize('startEdit', $post);

        return view('posts.edit', ['post' => $post]);
        */
    }

    public function edit(Request $request, Post $post)
    {
        /*
        Gate::authorize('edit', $post);

        $validated = $request->validate([
            'body' => 'required'
        ]);

        Post::find($post->id)->update([
            'body' => $request->body
        ]);
        $post->refresh();

        return redirect()->action([PostController::class, 'index']);
        */
    }

    public function destroy(Post $post)
    {
        /*
        Gate::authorize('delete', $post);

        $post->delete();

        return back();
        */
    }
}
