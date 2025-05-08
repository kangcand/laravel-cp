<?php
namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function article()
    {
        return view('article.index');
    }

    public function articleShow($id)
    {
        return view('article.show');
    }
}
