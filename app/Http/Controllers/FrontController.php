<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Blog;
use App\Analyze;
use App\Tstep;
use App\Youtube;
class FrontController extends Controller
{
	public function index() {
		$news = new Blog;
		$last_news = $news->orderBy('id','desc')->first();
		$news = $news->orderBy('id','desc')->where('id','!=',$news->pluck('id')->last())->take(5)->get();
		$anas = new Analyze;
		$analyzes = $anas->orderBy('id','desc')->take(6)->get();
		$ts = new Tstep;
		$tsteps = $ts->orderBy('id','desc')->where('updated_at','>',date("Y-m-d 06:00:00"))->take(8)->get();
		//$tstepsx = $ts->orderBy('id','desc')->where('updated_at','>',date("Y-m-d 06:00:00"))->take(8)->get();
		$json = file_get_contents('https://zeanza.com/mm88fa-api/vision_data/api.php?met=hdp&APIkey=S09ZWFArak1BZTNpcUZGNTA2YWVia2tjU0F0bUVyazNZdjJVSGpZWXJMcDlrWHFYRGNnYlRjTWphaFg1RUVVWGh6WjNsUDZ6WUJKeDlCYUFRZzdrenc9PTo6G5mkISD1Nfndtt7QHBsBSA==');
		$objs = json_decode($json);
		$you = new Youtube;
		$yous = $you->orderBy('id','desc')->take(2)->get();

		$max_count = $tsteps->count();
		if ($max_count == 0) {
			for ($i=0; $i < 8; $i++) { 
				$dataSet[] = [
                    "id"=> '',
                    "uid"=> '',
					"team1"=> '',
					"team2"=> '',
					"team3"=> '',
					"created_at"=> '',
                    "updated_at"=> ''
				];
			}
		}
		if ($max_count > 0 && $max_count < 8) {
			foreach($tsteps as $tts) {
				$dataSet[] = [
					"id"=> $tts->id,
					"uid"=> $tts->uid,
					"team1"=> $tts->team1,
					"team2"=> $tts->team2,
					"team3"=> $tts->team3,
					"created_at"=> $tts->created_at,
					"updated_at"=> $tts->updated_at
				];
			}
			for ($i=0; $i < (8 - $max_count); $i++) {
				$dataSet[] = [
					"id"=> '',
					"uid"=> '',
					"team1"=> '',
					"team2"=> '',
					"team3"=> '',
					"created_at"=> '',
                    "updated_at"=> ''
				];
			}		
		}
		else {
			foreach($tsteps as $tts) {
				$dataSet[] = [
					"id"=> $tts->id,
					"uid"=> $tts->uid,
					"team1"=> $tts->team1,
					"team2"=> $tts->team2,
					"team3"=> $tts->team3,
					"created_at"=> $tts->created_at,
					"updated_at"=> $tts->updated_at
				];
			}
		}
		return view('pages.user.home',[
			'last_news'=>$last_news,
			'news'=>$news,
			'analyzes'=>$analyzes,
			'tsteps'=>$dataSet,
			'objs'=>$objs,
			'youtubes'=>$yous
		]);
	}

    public function allvicrow() {
        $ans = new Analyze;
        $analyzes = $ans->orderBy('id','desc')->get();
        return view('pages.user.allvicrow',['analyzes'=>$analyzes]);
    }

    public function allnews() {
        $ns = new Blog;
        $news = $ns->orderBy('id','desc')->get();
        return view('pages.user.allnews',['allnews'=>$news]);
    }   
    
    public function news($id) {
        $ns = new Blog;
        $news = $ns->where('id',$id)->first();
        $news_update = $ns->orderBy('id','desc')->where('id','!=',$news->id)->take(5)->get();
        return view('pages.user.news',['news'=>$news],['news_update'=>$news_update]); 
    }

    public function vview($id) {
        $an = new Analyze;
        $ans = $an->where('id',$id)->first();
        $ans_update = $ans->orderBy('id','desc')->where('id','!=',$ans->id)->take(5)->get();
        return view('pages.user.vview',['ans'=>$ans],['ans_update'=>$ans_update]); 
    }
    
    public function fullpage() {
        $you = new Youtube;
        $yous = $you->orderBy('id','desc')->take(2)->get();
        $json = file_get_contents('https://zeanza.com/mm88fa-api/vision_data/api.php?met=stp&APIkey=S09ZWFArak1BZTNpcUZGNTA2YWVia2tjU0F0bUVyazNZdjJVSGpZWXJMcDlrWHFYRGNnYlRjTWphaFg1RUVVWGh6WjNsUDZ6WUJKeDlCYUFRZzdrenc9PTo6G5mkISD1Nfndtt7QHBsBSA==');
        $objs = json_decode($json);
        return view('pages.user.tdstep-page',['objs'=>$objs,'youtubes'=>$yous]);
    }

    public function fullpage2() {
        $you = new Youtube;
        $yous = $you->orderBy('id','desc')->take(2)->get();
        $json = file_get_contents('https://zeanza.com/mm88fa-api/vision_data/api.php?met=hdp&APIkey=S09ZWFArak1BZTNpcUZGNTA2YWVia2tjU0F0bUVyazNZdjJVSGpZWXJMcDlrWHFYRGNnYlRjTWphaFg1RUVVWGh6WjNsUDZ6WUJKeDlCYUFRZzdrenc9PTo6G5mkISD1Nfndtt7QHBsBSA==');
        $objs = json_decode($json);
        return view('pages.user.tdstep-page2',['objs'=>$objs,'youtubes'=>$yous]);
    }

    public function lineNotify(Request $request) {
        $message='name: '.$request->fullname.' mobile: '.$request->phone.' LineID: http://line.me/ti/p/~'.$request->lineid;
        // tdedclub token: E85WI8wJ3xDUBlxLR0xGl9zOeep3TseAQMmyKA4kJw0
        $token = 'E85WI8wJ3xDUBlxLR0xGl9zOeep3TseAQMmyKA4kJw0';
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        curl_close( $ch );
        return Redirect()->back();
    }
}
