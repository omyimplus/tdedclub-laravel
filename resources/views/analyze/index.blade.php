
@extends('layouts.app', ['activePage' => 'analyze', 'titlePage' => __('Analyzes Management')])

@section('content')
    <div class="content">

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">{{ __('Analyze') }}</h4>
                                <p class="card-category"> {{ __('ระบบจัดการบทวิเคราะห์บอล') }}</p>
                            </div>

                            <div class="card-body">
                                @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif


<script>
window.onload = function() {
    if (window.jQuery) {  
        $("#addBlog").hide();
        $('#addButton').click(function(){
            $("#addBlog").show();
            $("#listBlog").hide();
        });
        $('#cancelButton').click(function(){
            $("#addBlog").hide();
            $("#listBlog").show();
        });        
    } 
}
</script>


<div class="row" id="listBlog">{{-- content list --}}
    <div class="col-sm-12">
        <button id="addButton" class="btn btn-success"><i class="far fa-plus-square"></i> เพิ่มบทความใหม่</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class=" text-primary">
                    <th>ไอดี</th>
                    <th>ชื่อเรื่อง</th>
                    <th>โพส์ตโดย</th>
                    <th class=" text-center">ออนไลน์</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>

                @if(!count($analyze))
                    <tr>
                        <td colspan="5" class="text-center">ยังไม่มีข้อมูลในฐานข้อมูล.</td>
                    </tr>
                @else
                    @foreach($analyze as $a) 
                    <tr>
                        <td>{{$a->id}}</td>
                        <td> 
                            <a href="{{url('analyze/'.$a->id.'/edit')}}" rel="tooltip" title="แก้ไข ( id.{{$a->id}} )">{{$a->title}}</a>
                        </td>
                        <td>{{creator($a->uid)}}</td>
                        <td class="td-actions text-center">
                            @php
                            if($a->status == 1) { $status='ออนไลน์'; $scolor='danger'; }
                            else { $status='ออฟไลน์'; $scolor='grey'; }
                            @endphp
                            <form action="/analyze/{{$a->id}}" method="POST">
                                <input type="hidden" name="_method" value="PUT" />
                                <input type="hidden" name="switch" value="status" />
                                <button type="submit" rel="tooltip" title="{{ $status }}" class="btn btn-link">
                                    <i class="fas fa-rss text-{{ $scolor }}"></i>
                                </button>
                                @csrf
                            </form>                            
                        </td> 
                        <td class="td-actions text-right">
                        <form action="/analyze/{{$a->id}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" rel="tooltip" title="Remove" class="btn btn-outline-danger btn-link btn-sm p-0" onclick="return confirm('ลบโพส์ต ID #{{$a->id}} แน่ใจ?');">
                                <i class="material-icons">close</i>
                            </button>
                            @csrf
                        </form>

                        </td>
                    </tr>

                @endforeach
            @endif
                </tbody>
            </table>
        </div>        
    </div>
</div>{{-- content list --}}


<div class="row" id="addBlog">
    <div class="col-md-12">
            <button id="cancelButton" class="btn btn-warning"><i class="far fa-window-close"></i> &nbsp; ยกเลิก &nbsp; </button>
    <form method="post" action="analyze/" class="form-horizontal">
            <div class="row">
                <label class="col-sm-1 col-form-label mt-2" for="title">ชื่อเรื่อง</label>
                <div class="col-sm-7">
                    <div class="form-group">
                        <input class="form-control" name="title" id="title" type="text" placeholder="ใส่ชื่อบทความ" value="" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-1 col-form-label mt-2" for="title">คำบรรยาย</label>
                <div class="col-sm-7">
                    <div class="form-group">
                        <input class="form-control" name="description" id="description" type="text" placeholder="ใส่คำบรรยาย" value="" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </div>
            @csrf
        </form>
    </div> 
</div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
  </div>
@endsection