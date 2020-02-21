<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Chche;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "บทความของฉัน";
        $data['subtitle'] = "บทความเกี่ยวกับการพัฒนาเว็บแอพพลิเคชั่นด้วย Laravel Framwork v6";
        $data['articles'] = "Cache";
        $data['articles'] = Article::all();

        return view('article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "บทความของฉัน";
        $data['subtitle'] = "สร้างรายการใหม่";

        return view('article.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $article = new Article();
        $article->title = $request->input('title');
        $article->date = $request->input('date');
        $article->author = $request->input('author');
        $article->details = $request->input('details');
        $article->save();

        return redirect()->route('article.add')->with('message', 'บันทึกข้อมูลได้สำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = "บทความของฉัน";
        $data['subtitle'] = "บทความเกี่ยวกับการพัฒนาเว็บแอพพลิเคชั่นด้วย Laravel Framwork v6";
        $data['article'] = Article::find($id);

        return view('article.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "บทความของฉัน";
        $data['subtitle'] = "บทความเกี่ยวกับการพัฒนาเว็บแอพพลิเคชั่นด้วย Laravel Framwork v6";
        $data['article'] = Article::findOrFail($id);

        return view('article.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->input('title');
        $article->date = $request->input('date');
        $article->author = $request->input('author');
        $article->details = $request->input('details');
        $article->save();

        return redirect()->route('articles')->with('message', 'แก้ไขข้อมูลได้สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles');
    }
}
