@extends('layouts.main')

@section('content')
<div class="zean1">
	<div class="container bg-black py-2">
		<h3>ทีเด็ดบอลเดี่ยว</h3>
			<p><i class="fas fa-home"></i><a href="#"> <span>หน้าแรก</span></a>
				<i class="fas fa-angle-right"></i> <span>ทีเด็ดบอลเดี่ยว</span></p>
		<div class="row">
			{{-- <div class="col-12">
				<span>
					ทีมงานทำการเก็บเรียบเรียง ข้อมูลการวิเคราะห์ สเต็ปบอลเดี่ยว สเต็ปบอลคู่
					ทรรศนะบอลวันนี้ วิเคราะห์บอลวันนี้ ทรรศนะเซียนบอล ทีเด็ดบอล ทีเด็ดบอลรายวัน ทีเด็ดบอลวันนี้ บอลเต็ง 
					ทีเด็ดบอลสเต็ป ทีเด็ดบอลเต็ง ทีเด็ดบอลเดี่ยว วิเคราะห์บอลทุกคู่ วิเคราะห์บอลทุกลีก ทรรศนะเซียนบอลวันนี้ 
					ทีเด็ดบอลวันนี้ ผลบอล วิเคราะห์บอลสุดแม่น ราคาบอล ทีเด็ดฟุตบอล ทีเด็ดบอลวันนี้ โปรแกรมบอลวันนี้
				</span>
			</div> --}}
			<div class="container bg-black pb-3">
				<div class="row">
					@foreach($youtubes as $yt)
					<div class="col-xs-12 col-lg-6 pr-3">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="{{$yt->clip}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="banner-1 pb-2">
				<div class="container bg-black">
					<div class="row">		
							<div class="col"><a href="#"><img src="/images/bn7m.gif" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="api">
	<div class="container bg-black">
		<div class="row">
				<div class="col-12 pb-2">{{ballstep($objs)}}</div>
				{{-- <div class="col-12 pb-2">
					<img style="width:100%;" src="images/api1.png" alt="">
				</div> --}}
		</div>
	</div>
</div>
@endsection
