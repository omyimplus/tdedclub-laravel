<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Analyze;
class FrontController extends Controller
{
    public function index()
    {
        $news = new Blog;
//        $news->orderBy('id','desc')->take(1)->get()
        $last_news = $news->orderBy('id','desc')->first();
        $news = $news->orderBy('id','desc')->where('id','!=',$news->pluck('id')->last())->take(5)->get();
        $anas = new Analyze;
        $analyzes = $anas->orderBy('id','desc')->take(6)->get();

        return view('pages.user.home',
        ['last_news' => $last_news,'news' => $news,'analyzes' => $analyzes],

        );
    }
}
