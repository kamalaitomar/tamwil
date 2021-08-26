<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $articles = Article::paginate(10);
        return view('admin.article.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.createArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article= new Article();
        $article->title_fr = $request->input('titleFr');
        $article->title_ar = $request->input('titleAr');

        $article->slug_fr = Str::slug($request->input('titleFr'), '-') ;
        $article->slug_ar = Str::slug($request->input('titleAr'), '-') ;

        $article->content_fr = json_encode($request->input('articleFr'));
        $article->content_ar = json_encode($request->input('articleAr'));
        
        
        $article->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        
        return view('admin.article.editArticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticle $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->title_fr = $request->input('title');
        $article->title_ar = $request->input('title_ar');

        $article->content_fr = $request->input('content');
        $article->content_ar = $request->input('content_ar');
        
        
        $article->save();
        $request->session()->flash('status','votre article a été modifier avec succès');

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        $request->session()->flash('status','votre article a été Suprime');

        return redirect()->route('article.index');
    }

    public function uploadEditorImage(Request $request){
        $this->validate($request, [
            'image'=> 'required|mimes:jpeg,jpg,png'
        ]);

        $picName= time().'-'.$request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'),$picName);
        return response()->json([
            "success"=>1,
            "file"=>[
                'url' => "http://localhost:8000/uploads/$picName"
            ] 
        ]);
        return $picName;
    }
}
