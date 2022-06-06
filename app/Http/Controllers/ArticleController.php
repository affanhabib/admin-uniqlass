<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index', ['article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required',
            'judul' => 'required',
            'artikel' => 'required',
        ]);
        $headername = 'header'.'-'.$request->judul.'.'.$request->header->extension();
        $request->header->move(public_path('header'), $headername);
        Article::create([
            'header' => $headername,
            'judul' => $request['judul'],
            'artikel' => $request['artikel'],
            'author' => Auth::user()->name,
        ]);
        return redirect()->route('daftar-artikel.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'header' => 'required',
            'judul' => 'required',
            'artikel' => 'required',
        ]);
        $article = Article::find($id);

        if (!empty($request->header)){
            $headername = 'header'.'-'.$request->judul.'.'.$request->header->extension();
            $request->header->move(public_path('header'), $headername);

            $article->header = $headername;
        }
        $article->judul = $request['judul'];
        $article->artikel = $request['artikel'];

        $article->save();
        return redirect()->route('daftar-artikel.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        unlink(public_path().'/header/'.$article->header);
        return redirect()->route('daftar-artikel.index')->with('success','Artikel berhasil dihapus');
    }
}
