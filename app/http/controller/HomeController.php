<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function create()
    {
        return View('create');
    }
    public function download($id)
    {
        $post = Post::find($id);
        if ($post->pathpdf != null) {
            return  Storage::download($post->pathpdf);
        }
    }


    public function store(Request $request)
    {
        $pdf  = Storage::putFileAs('pdfFile', $request->file('pdf'), time() . '.' . $request->file('pdf')->getClientOriginalName());
        $request['pathpdf'] = $pdf;
        Post::create($request->all());
    }
}
