<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // loading view for information 
    public function index()
    {
        $article = Article::take(3)->latest()->get();
        return view('articles.article', [
            'articles' => $article
        ]);
    }
    // loading view for specific data
    public function show($articleId)
    {
        $article = Article::find($articleId);

        return view('articles.show', [
            'articles' => $article
        ]);
    }
    // loading view for some operation e.g form data save, update, read, delete, edit
    public function create()
    {
        return view('articles.create');
    }
    // saving data into db
    public function store()
    {
        // validate field
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }
    // edit data
    public function edit($articleId)
    {
        $article = Article::find($articleId);
        return view('articles.edit', compact('article'));
    }
    public function update($articleId)
    {
        $article = Article::find($articleId);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }
}
