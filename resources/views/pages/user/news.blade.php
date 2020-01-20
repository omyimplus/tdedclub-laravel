@extends('layouts.main')

@section('content')
<div class="vicrow-page">
    <div class="container bg-black py-3">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h3>{{$news->title}}</h3>
                <p><i class="fas fa-home"></i><a href="{{url('/')}}"> <span>หน้าแรก</span></a> <i class="fas fa-angle-right"></i> <span>{{$news->title}}</span></p>
                <div>
                    <img src="{{url('imgs/'.$news->image)}}" class="img-fluid" />
                    <div class="py-3">
                        {!!$news->content!!}
                    </div>
                </div>
                <div class="int-page py-3">
                    <div class="title">
                        <div class="row">
                            <div class="col-12"><h1>อัพเดทล่าสุด</h1></div>
                        </div>
                    </div>
                </div>
                <div class="int-link">
                    <ul class="interest">
                        @foreach($news_update as $newsx)
                        <li><i class="fas fa-angle-double-right text-warning"></i>
                            <a href="{{url('/news/'.$newsx->id)}}"><span>{{$newsx->title}}</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="col-md-4 py-1">
                <div id="sidebar-scroll">
                    <div class="sidebar">
                        <a href="#"><img src="/images/bn-2.gif" alt="Snow" style="width:100%"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
