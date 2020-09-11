<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(8);
        return view ('site.article.articles', compact('articles'));
    }

    public function detail($id)
    {
        $article = Article::find($id);
        return view ('site.article.article-detail', compact('article'));
    }
}
