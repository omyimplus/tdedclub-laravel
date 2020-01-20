@extends('layouts.main')

@section('content')
<div class="news">
    <div class="container bg-black py-3">
        <div class="row">
            <div class="col-md-8">
                <h3>วิเคราะห์บอลเด็ด</h3>
                <p><i class="fas fa-home"></i><a href="{{url('/')}}"> <span>หน้าแรก</span></a> <i class="fas fa-angle-right"></i> <span>วิเคราะห์บอลเด็ด</span></p>
                <div class="row">

                    @foreach($analyzes as $ans)
                    <div class="col-12 col-lg-4  pb-2">
                        <div class="all-cat">
                            <a href="#">
                                <img src="{{url('imgs/'.$ans->image)}}" alt="Snow" style="width:100%">
                                <p>{{$ans->title}}</p>
                            </a>
                            <span><i class="far fa-clock"></i> {{ thaiDate(date('d-m-Y H:i',strtotime($ans->created_at)),'a') }} <i class="far fa-eye"></i> 
                                {{ $ans->visit }}
                                views</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 py-1">
                <div id="sidebar-scroll">
                    <div class="sidebar">
                        <a href="#">
                            <img src="/images/bn-2.gif" alt="Snow" style="width:100%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
