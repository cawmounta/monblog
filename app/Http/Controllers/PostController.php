<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where("status",true)->orderBy("id", "DESC")
              ->paginate(12);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //récupération de toutes les categories
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' =>'required',
            'description'=> '',
            'imagel' => '|image:png,jpg,jpeg,gif,svg|max:2048',
            'date_pub' => '',
            'author' => '',
            'status' => 'required',
            'category_id'=>'required'
   
        ]);

        //Uploder l'image sur le serveur
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $validated['image'] = $imageName;

        Post::create($validated);
        return back()
        ->with('success','Article crée avec succés !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $category->delete();
        return back()
        ->with('success','Catégories supprimées avec succés');
    }
}
