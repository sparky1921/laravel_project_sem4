<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = DB::table('blogs')->get();
        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }
}
