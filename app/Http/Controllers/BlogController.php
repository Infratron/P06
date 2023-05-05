<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class BlogController extends Controller
{
    public function create(){
        return view('blog.create');
    }

    public function store(ArticleRequest $request){
        // $blog = new Article();
        // $blog->title = $request->title;
        // $blog->author = $request->author;
        // $blog->description = $request->description;
        // $blog->save();
        
        // protected mass assignment
        $blog = Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'cover' => $request->file('cover')->store('public/covers'),
        ]);
        return redirect(route('Homepage'))->with('articleCreated', 'Hai inserito con successo un articolo!');
    }

    public function index(){
        $articles = Article::all();
        return view('blog.index', compact('articles'));
    }
}
