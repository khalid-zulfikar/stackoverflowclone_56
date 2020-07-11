@extends('datta-able.master')

@push('links')
   
    <!-- data tables css -->
    <link rel="stylesheet" href="{{asset('/datta-able/plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/datta-able/plugins/bootstrap/css/datatables.min.css')}}">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


@endpush


@section('content')
    
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Pertanyaan</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:"></i>index</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">show</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                            {{$quest->title}}<br>
                            <h3 class="card-title">{{$quest->content}}</h3>
                            <br>
                            Author : {{$user->name}}
                            | Create : {{$quest->created_at}}
                            
                            </div>
                            <!-- /.card-header -->
                            <!-- Comment start -->
                            @foreach($quest->comments as $komen )
                            <div class="row justify-content-md-center ">	
                                <div class="card col-md-11 mt-2" style="height: auto;" >
                                    <div class="card-body">
                                        <div class="row">
                                                
                                            <div class="col-md-12">
                                            <p>
                                                <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>
                                                {!! $komen->user_name !!}</strong></a>
                                                
                                                <div class="clearfix"></div>
                                                <p>{!! $komen->content_comment !!}</p>
                                                <hr>
                                                <a class="float-right btn btn-outline-primary "> <i class="fa fa-reply"></i> Reply</a>
                                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                            </div>
                                        </div>
                                            <!-- Nested Comment start -->
                                            
                                            <!-- Nested Comment end -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Comment end -->
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="/comment/{{$quest->id}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="content" class="form-control my-editor">{!! old('content', $content ?? '') !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div> 
                        </div>
                        <!-- /.card -->
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

@endsection

@push('scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endpush


