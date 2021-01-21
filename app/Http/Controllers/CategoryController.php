<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $posts = DB::table('blog_models')->where('category', '=', $id)
            ->paginate(6);

        return view('blog/blog', ['data' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {

    }

    public function main(){
        $userId = Auth::id();
        $categories = DB::table('categories')->where('user_id', '=', $userId)->get();
        return view('dashboard/category',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:64',
            'slug' => 'required|min:3|max:64|unique:categories,slug',
        ]);


        $userId = Auth::id();

        $catecory = category::create([
            'user_id' => $userId,
            'name' => $request->name,
            'slug' => $request->name,
        ]);

        return redirect('dashboard/category')->with('message', 'Category Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $category->update($request->all());
        return redirect('dashboard/category')->with('message', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect('dashboard/category')->with('message', 'Category Delete');
    }






}
