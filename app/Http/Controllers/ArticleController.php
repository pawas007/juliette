<?php

namespace App\Http\Controllers;

use App\article;
use App\category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use  App\CategoryArticleModel;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'articles' => article::query()->with('categories')->orderBy('id', 'desc')->get(),
            'categories' => category::whereHas('articles')->get(),
            'text' => 'Hello world',
        ];

        return view('blog/blog', $data);
    }


    public function postList()
    {
        $userId = Auth::id();
        $articles = DB::table('articles')->where('user_id', $userId)->orderBy('id', 'desc')->get();
        return view('/dashboard/postList', compact('articles'));

    }


    public function addPost()
    {
        $categories = DB::table('categories')->get();
        return view('/dashboard/addpost', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = $this->validate($request, [
            'theme' => 'min:5|max:64',
            'slug' => 'required|min:5|max:64|unique:articles,slug',


        ]);

//        $category = category::find((int)$request->get('category'));
        $postImage = 'defaultPostImg.png';
        if ($request->hasFile('imgpost')) {
            $postImgRq = $request->file('imgpost')->getClientOriginalName();
            $file = $request->file('imgpost');
            $file->move(public_path() . '/images/postimage', $postImgRq);
            $postImage = $postImgRq;
        }


        $blog = new article();
        $userId = Auth::id();
        $email = Auth::user()->email;
        $author = Auth::user()->name;

        $blog->user_id = $userId;
        $blog->theme = $request->input('theme');
        $blog->rating = $request->input('rating');
        $blog->email = $email;
        $blog->author = $author;
        $blog->slug = $request->input('slug');
        $blog->content = $request->input('post_content');
        $blog->postimg = $postImage;
        $blog->save();
        article::find($blog->id)->categories()->sync($request->get('category'));
        return redirect()->route('addpost')->with('message', 'Posts Added');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\article $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return view('blog/singlePost', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        $data = [
            'article' => $article,
            'categories' => category::all(),

        ];


        return view('dashboard.editpost', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {

//        dd($request->get('category'));

        $validator = $this->validate($request, [
            'theme' => 'min:5|max:64',
            'slug' => 'required|min:5|max:64|unique:articles,slug',
        ]);

        $postImage = 'defaultPostImg.png';
        if ($request->hasFile('imgpost')) {
            $postImgRq = $request->file('imgpost')->getClientOriginalName();
            $file = $request->file('imgpost');
            $file->move(public_path() . '/images/postimage', $postImgRq);
            $postImage = $postImgRq;
        }


        $article->theme = $request->input('theme');
        $article->rating = $request->input('rating');
        $article->content = $request->input('post_content');
        $article->postimg = $postImage;
        $article->slug = $request->input('slug');
        $article->save();
        $article->categories()->sync($request->get('category'));
        return redirect()->route('postList')->with('message', 'Posts edited');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        $article->delete();
        return redirect('dashboard/postlist')->with('message', 'Posts Deleted');
    }

    public function category(category $id)
    {
        $articles = $id->articles;
        return view('blog.blog', ['articles' => $articles,
            'categories' => category::whereHas('articles')->get(),
        ]);
    }
}
