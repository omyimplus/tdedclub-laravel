<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Analyze;
use App\Tstep;
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
        $ts = new Tstep;
        $tsteps = $ts->orderBy('id','desc')->take(8)->get();

        $json = file_get_contents('https://zeanza.com/mm88fa-api/vision_data/api.php?met=hdp&APIkey=S09ZWFArak1BZTNpcUZGNTA2YWVia2tjU0F0bUVyazNZdjJVSGpZWXJMcDlrWHFYRGNnYlRjTWphaFg1RUVVWGh6WjNsUDZ6WUJKeDlCYUFRZzdrenc9PTo6G5mkISD1Nfndtt7QHBsBSA==');
        $objs = json_decode($json);

        return view('pages.user.home',
        ['last_news'=>$last_news,'news'=>$news,'analyzes'=>$analyzes,'tsteps'=>$tsteps,'objs'=>$objs],

        );
    }
    public function allvicrow() {
        $ans = new Analyze;
        $analyzes = $ans->orderBy('id','desc')->get();
        return view('pages.user.allvicrow',
        ['analyzes'=>$analyzes]
        );
    }

    public function allnews() {
        $ns = new Blog;
        $news = $ns->orderBy('id','desc')->get();
        return view('pages.user.allnews',
        ['allnews'=>$news]
        );
    }   
    
    public function news($id) {
        $ns = new Blog;
        $news = $ns->where('id',$id)->first();
        $news_update = $ns->orderBy('id','desc')->where('id','!=',$news->id)->take(5)->get();
        return view('pages.user.news',
        ['news'=>$news],
        ['news_update'=>$news_update]
        ); 
    }
}
