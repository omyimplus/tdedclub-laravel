@extends('layouts.main')

@section('content')

<div class="banner-1">
    <div class="container bg-black">
        <div class="row">
            <div class="col">
                <a href="https://www.mm88online.com/"><img src="/images/bn-1.gif" alt=""></a>
            </div>
        </div>
    </div>
</div>

{{-- <แถบดูบอลออนไลน์> --}}
<div id="title-doball">
    <div class="container bg-black">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <div class="row">
                        <div class="col-8 col-lg-10">
                            <h1>ดูบอลออนไลน์ฟรี</h1>
                        </div>
                        <div class="col-4 col-lg-2">
                            <a href="/live">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <แถบดูบอลออนไลน์> --}}

{{-- <ช่องดูบอลออนไลน์> --}}
<div id="doball">
    <div class="container bg-black">
        <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="rounded mt-2">

                                <div class="panel panel-info" >
                                   <div class="panel-heading">
                                   <div>
                                      <img src="/images/logo-online.png" alt="" width="100%">
                                   </div>
                                      <h3 class="text-center"> สมัครสมาชิกผ่านหน้าเว็บ</h3>
                                   </div>
                                   <div class="panel-body" >
                                      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                         <form name="line-notify" class="form-horizontal" role="form" action="{{url('/api/line')}}" method="post">
                                            <div class="input-group" style="margin-bottom: 10px">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                  <span class="fa fa-user text-primary"></span>
                                                  </span>
                                               </div>
                                               <input name="fullname" id="fullname" type="text" class="form-control" value="" placeholder="ชื่อ - นามสกุล" required>
                                            </div>
                                            <div class="input-group" style="margin-bottom: 10px">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                     <span class="fas fa-mobile"></span>
                                                  </span>
                                               </div>
                                               <input name="phone" id="phone" type="text" class="form-control" maxlength="10" placeholder="เบอร์โทรศัพท์" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                            </div>
                                            <div class="input-group" style="margin-bottom: 10px">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                     <span class="fab fa-line text-success"></span>
                                                  </span>
                                               </div>
                                               <input name="lineid" id="lineid" type="text" class="form-control" placeholder="lineID" required>
                                            </div>
                                            <div class="form-group">
                                               <div class="col-sm-12 col-md-12 col-xs-12 p-0">
                                                  <button class="btn text-white" style="font-size:17px; background-color:#00c200; width:100%;" name="submit" type="submit">ยืนยันข้อมูลการสมัคร</button>
                                               </div>
                                            </div>
                                         </form>
                                      </div>
                                   </div>
                              </div>
                        </div>
                            <div class="col">
                                <a href="http://nav.cx/52dtFXm"><img class="banner-auto" src="/images/promotion-1.jpg" alt=""></a>
                            </div>
                    </div>
                </div>
                        <div class="col-8">
                            <img class="img-doball" src="/images/bg-channal.jpg" alt="">
                                <img class="leauge" src="/images/bn-leauge.png" alt="">
                        </div>
                </div>
        </div>
    </div>
</div>
{{-- <ช่องดูบอลออนไลน์> --}}


{{-- <แถบข่าวกีฬา> --}}
<div id="home">
    <div class="container bg-black">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <div class="row">
                        <div class="col-8 col-lg-10">
                            <h1>ข่าวฟุตบอลประจำวัน</h1>
                        </div>
                        <div class="col-4 col-lg-2">
                            <a href="/review">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- <แถบข่าวกีฬา> --}}

{{-- <หน้าคอนเท้> --}}
        <div class="row py-4">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <a href="#" class="imageMain">
                    <section>
                        <img class="img-fluid" src="images/news-1.jpg" alt="">
                    </section>
                    <div class="content">
                        <h5 class="px-3">เป๊ป กวาร์ดิโอล่า กู เทรนเนอร์แมนเชสเตอร์ ซิตี้ ลดความกดดันโดยชี้ว่าทีมยังไม่อาจ</h5>
                        <p class="px-3">"เรือใบ" พ่ายคารังให้กับ แมนเชสเตอร์ ยูไนเต็ด 1-2 ในเกมลีกนัดล่าสุด ทำให้ทีมมีแต้มตามหลัง "หงส์แดง" ทีมจ่าฝูงไกล 14 คะแนนแล้ว ซึ่งแม้ว่าทีมจะคว้าแชมป์พรีเมียร์ลีกมาสองปีติดต่อกันแต่ทางนายใหญ่ชาวสเปนชี้ว่าทีมยังไม่อาจเทียบกับเหล่ายักษ์ใหญ่ในยุโรป</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="row mb-2 homeListnews">
                    <div class="col-4 px-lg-0">
                        <div class="imageContent"><img class="img" src="images/news-2.jpg" alt=""></div>
                    </div>
                    <div class="col-8 pl-0">
                        <div class="content">
                            <h2>เป๊ป กวาร์ดิโอล่า กู เทรนเนอร์แมนเชสเตอร์ ซิตี้ ลดความกดดันโดยชี้ว่าทีมยังไม่อาจ</h2>
                            <p>มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="row mb-2 homeListnews">
                    <div class="col-4 px-lg-0">
                        <div class="imageContent"><img class="img" src="images/news-2.jpg" alt=""></div>
                    </div>
                    <div class="col-8 pl-0">
                        <div class="content">
                            <h2>เป๊ป กวาร์ดิโอล่า กู เทรนเนอร์แมนเชสเตอร์ ซิตี้ ลดความกดดันโดยชี้ว่าทีมยังไม่อาจ</h2>
                            <p>มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="row mb-2 homeListnews">
                    <div class="col-4 px-lg-0">
                        <div class="imageContent"><img class="img" src="images/news-2.jpg" alt=""></div>
                    </div>
                    <div class="col-8 pl-0">
                        <div class="content">
                            <h2>เป๊ป กวาร์ดิโอล่า กู เทรนเนอร์แมนเชสเตอร์ ซิตี้ ลดความกดดันโดยชี้ว่าทีมยังไม่อาจ</h2>
                            <p>มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="row mb-2 homeListnews">
                    <div class="col-4 px-lg-0">
                        <div class="imageContent"><img class="img" src="images/news-2.jpg" alt=""></div>
                    </div>
                    <div class="col-8 pl-0">
                        <div class="content">
                            <h2>เป๊ป กวาร์ดิโอล่า กู เทรนเนอร์แมนเชสเตอร์ ซิตี้ ลดความกดดันโดยชี้ว่าทีมยังไม่อาจ</h2>
                            <p>มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า มิโน่ ไรโอล่า เอเย่นต์คนดังเผยยังไม่ชัวร์ว่า ซลาตัน อิบราฮิโมวิชดาวยิงตัวเก๋า</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- <หน้าคอนเท้> --}}


{{-- <ช่องยูทูป> --}}
<div id="youtube">
    <div class="container bg-black pb-2">
        <div class="row">
            <div class="col-12 col-lg-6 pr-1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/yfO65sfWQtc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-6 pl-1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/yfO65sfWQtc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <ช่องยูทูป> --}}

<div class="zean">
    <div class="container bg-black py-1">
        <div class="row">
            <div class="col-12">
                <a href="https://www.mm88online.com/"><img src="/images/bn-3.gif" alt=""></a>
                    <h2>ทรรศนะบอล ทีเด็ดบอล บ้านผลบอล</h2>
                        <p>ทรรศนะบอลวันนี้ วิเคราะห์บอลวันนี้ ทรรศนะเซียนบอล ทีเด็ดบอล ทีเด็ดบอลรายวัน ทีเด็ดบอลวันนี้ บอลเต็ง บอลสเต็ป บ้านผลบอล ทีเด็ดบอลเต็ง ทีเด็ดบอลเดี่ยว วิเคราะห์บอลทุกคู่ วิเคราะห์บอลทุกลีก ทรรศนะเซียนบอลวันนี้ ทีเด็ดบอลวันนี้ แหล่งรวมเซียนบอล ผลบอล วิเคราะห์บอลสุดแม่น ราคาบอล ทีเด็ดฟุตบอล ทีเด็ดบอลวันนี้ โปรแกรมบอลวันนี้</p>
            </div>
        </div>
    </div>
</div>

{{-- <แถบวิเคราะห์บอล> --}}
<div id="analyze-ball">
    <div class="container bg-black">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <div class="row">
                        <div class="col-8 col-lg-10">
                            <h1>วิเคราะห์บอลวันนี้</h1>
                        </div>
                        <div class="col-4 col-lg-2">
                            <a href="/vicrow">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <แถบวิเคราะห์บอล> --}}

{{-- <วิเคราะห์บอล> --}}
<div id="vicrow">
    <div class="container bg-black py-3">
       <div class="row">
            <div class="col-12 pb-2">
                <div class="row">
                    <div class="col-6 col-lg-4">
                        <a href="#">
                            <div class="img-zoom">
                                <img src="images/tdedclub.jpg" class="img-fluid" alt="">
                            </div>
                            <p>วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4">
                        <a href="#">
                            <div class="img-zoom">
                                <img src="images/tdedclub.jpg" class="img-fluid" alt="">
                            </div>
                            <p>วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4">
                        <a href="#">
                            <div class="img-zoom">
                                <img src="images/tdedclub.jpg" class="img-fluid" alt="">
                            </div>
                            <p>วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4">
                        <a href="#">
                            <div class="img-zoom">
                                <img src="images/tdedclub.jpg" class="img-fluid" alt="">
                            </div>
                            <p>วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4">
                        <a href="#">
                            <div class="img-zoom">
                                <img src="images/tdedclub.jpg" class="img-fluid" alt="">
                            </div>
                            <p>วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4">
                        <a href="#">
                            <div class="img-zoom">
                                <img src="images/tdedclub.jpg" class="img-fluid" alt="">
                            </div>
                            <p>วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล
                                วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล
                                วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล
                                วิเคราะห์บอลพรีเมียร์ลีก วันพุธที่ 10/12/2562 แมยูฯ ไนเต็ด vs ลิเวอร์พูล
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <วิเคราะห์บอล> --}}

{{-- <แถบทีเด็ดเซียน> --}}
<div id="tded-zean">
    <div class="container bg-black">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <div class="row">
                        <div class="col-12 texthead">
                            <h1>ทีเด็ดสเต็ป วันที่ 9 มกราคม 2563</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <แถบทีเด็ดเซียน> --}}

{{-- <ทีเด็ดเซียน> --}}
<div id="zeantded">
    <div class="container bg-black">
        <div class="row">
            <div class="col-6 col-lg-3 py-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 py-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 py-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 py-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 pb-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 pb-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 pb-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

            <div class="col-6 col-lg-3 pb-2">
                <div class="img-tded">
                    <img src="/images/balltor12.gif" class="img-fluid" alt="">
                </div>
                <div class="tdedstep">
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                    <div class="py-2 bg-grey"><p><img class="img-1" src="/images/ball.gif" alt=""> บาเซโลน่า(N) 0.5</p></div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- <ทีเด็ดเซียน> --}}

{{-- { แถบบอล api } --}}
<div id="api-ball">
    <div class="container bg-black">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <div class="row">
                        <div class="col-8 col-lg-10">
                            <h1>ทรรศะบอลวันนี้</h1>
                        </div>
                        <div class="col-4 col-lg-2">
                            <a href="/tded">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- { แถบบอล api } --}}


{{-- { ช่องวาง api } --}}
<div class="api">
    <div class="container bg-black">
        <div class="row">
            <div class="col-12 pb-2">
                <img style="width:100%;" src="images/api1.png" alt="">
            </div>
        </div>
    </div>
</div>
{{-- { ช่องวาง api } --}}

<div class="banner-1">
    <div class="container bg-black">
        <div class="row">
            <div class="col">
                <a href="https://gudunung.com/"><img src="/images/bn-4.gif" alt=""></a>
            </div>
        </div>
    </div>
</div>

@endsection
