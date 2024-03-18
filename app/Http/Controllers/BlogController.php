<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $blogs = Blog::orderBy('id', 'desc')->paginate(2);
        
        return view('blog.main', compact("blogs", "user"));
    }

    public function create()
    {
        $blog = new Blog;
        $method = "POST";
        $route = "storeBlog";

        return view('blog.create', compact("method", "route", "blog"));
    }

    public function store(Request $request)
    {
        $dataBlog = [
            "section" => $request->section,
            "detail" => $request->description,
            "user_id" => Auth::user()->id,
        ];

        Blog::create($dataBlog);

        return redirect()->route("indexBlog")->with('success', 'Create Success');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $method = "PUT";
        $route = "updateBlog";

        return view('blog.create', compact("blog", "method", "route"));
    }

    public function update(Request $request, Blog $blogs)
    {
        dd($blogs);
        
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('indexBlog')->with('success', 'Delete Success');
    }
}
