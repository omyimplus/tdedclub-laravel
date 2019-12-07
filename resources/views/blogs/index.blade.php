
@extends('layouts.app', ['activePage' => 'blogs', 'titlePage' => __('Blogs Management')])

@section('content')
    <div class="content">

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">{{ __('Blogs') }}</h4>
                                <p class="card-category"> {{ __('ระบบจัดการบทความ') }}</p>
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

<div class="row">


<div class="col-md-12">
    <form method="post" action="#" class="form-horizontal">
  
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
        <label class="col-sm-1 col-form-label mt-2" for="title">Slug</label>
        <div class="col-sm-4">
            <div class="form-group">
                <input class="form-control" name="slug" id="slug" type="text" value="" disabled />
            </div>
        </div>
        <div class="col-sm-2">

                <div class="custom-control custom-checkbox mt-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                        <label class="custom-control-label" for="customCheck">เปิดทำงาน</label>
                      </div>
        </div>        
    </div>



        
    <div class="row">
            <div class="editable">
                    <p>My father’s family name being <a href="https://en.wikipedia.org/wiki/Pip_(Great_Expectations)">Pirrip</a>, and my Christian name Philip, my infant tongue could make of both names nothing longer or more explicit than Pip. So, I called myself Pip, and came to be called Pip.</p>
                    <p>I give Pirrip as my father’s family name, on the authority of his tombstone and my sister,—Mrs. Joe Gargery, who married the blacksmith. As I never saw my father or my mother, and never saw any likeness of either of them (for their days were long before the days of photographs), my first fancies regarding what they were like were unreasonably derived from their tombstones. The shape of the letters on my father’s, gave me an odd idea that he was a square, stout, dark man, with curly black hair. From the character and turn of the inscription, “Also Georgiana Wife of the Above,” I drew a childish conclusion that my mother was freckled and sickly. To five little stone lozenges, each about a foot and a half long, which were arranged in a neat row beside their grave, and were sacred to the memory of five little brothers of mine,—who gave up trying to get a living, exceedingly early in that universal struggle,—I am indebted for a belief I religiously entertained that they had all been born on their backs with their hands in their trousers-pockets, and had never taken them out in this state of existence.</p>
                    <p>Ours was the marsh country, down by the river, within, as the river wound, twenty miles of the sea. My first most vivid and broad impression of the identity of things seems to me to have been gained on a memorable raw afternoon towards evening. At such a time I found out for certain that this bleak place overgrown with nettles was the churchyard; and that Philip Pirrip, late of this parish, and also Georgiana wife of the above, were dead and buried; and that Alexander, Bartholomew, Abraham, Tobias, and Roger, infant children of the aforesaid, were also dead and buried; and that the dark flat wilderness beyond the churchyard, intersected with dikes and mounds and gates, with scattered cattle feeding on it, was the marshes; and that the low leaden line beyond was the river; and that the distant savage lair from which the wind was rushing was the sea; and that the small bundle of shivers growing afraid of it all and beginning to cry, was Pip.</p>
                </div>
    <script>
var elements = document.querySelectorAll('.editable'),
    editor = new MediumEditor(elements);
        </script>
    </div>
    

    {{-- <div class="row">
        <label class="col-sm-1 col-form-label mt-2" for="title">เนื้อเรื่อง</label>
        <div class="col-sm-8">
            <div class="form-group">
                <textarea class="form-control" name="content" id="ckeditor" required="" oninvalid="this.setCustomValidity('Content is require.')"
   oninput="setCustomValidity('')"></textarea>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('ckeditor', {
                filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form',
                height: 400
            });
        </script>
    </div> --}}

    <div class="row">
        <label class="col-sm-1 col-form-label mt-2" for="title">แท็คคำค้น</label>
        <div class="col-sm-7">
            <div class="form-group">
                <input class="form-control" name="tag" id="tag" type="text" placeholder="คำค้น1, คำค้น2, คำค้น3, ..." value="" />
            </div>
        </div>
    </div>

    <div class="row">
        <label class="col-sm-1 col-form-label mt-2" for="title">ยูทูป</label>
        <div class="col-sm-7">
            <div class="form-group">
                <input class="form-control" name="clip" id="clip" type="text" placeholder="Youtube Url" value="" />
            </div>
        </div>
    </div>

    <div class="row">
        <label class="col-sm-1 col-form-label mt-2" for="title">รูปภาพ</label>
        <div class="col-sm-7">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>

    </div>


<div class="row">
    <div class="card-footer ml-auto mr-auto">
        <button type="submit" class="btn btn-primary">Add data</button>
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

    {{-- <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Users') }}</h4>
                <p class="card-category"> {{ __('Here you can manage users') }}</p>
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
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Email') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            {{ $user->created_at->format('Y-m-d') }}
                          </td>
                          <td class="td-actions text-right">
                            @if ($user->id != auth()->id())
                              <form action="{{ route('user.destroy', $user) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            @else
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </a>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection