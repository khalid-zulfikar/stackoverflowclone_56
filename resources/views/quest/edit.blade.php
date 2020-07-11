@extends('datta-able.master')

@push('links')
   
    <!-- data tables css -->
    <link rel="stylesheet" href="{{asset('/datta-able/plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/datta-able/plugins/bootstrap/css/datatables.min.css')}}">

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
                                    <li class="breadcrumb-item"><a href="javascript:">create</a></li>
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
                            <h3 class="card-title">Edit Pertanyaan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action=" {{url("/quest/{$quest->id}")}} " method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="title" placeholder="Judul Pertanyaan" value="{{$quest->title}}">
                                </div>
                                <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input type="text" class="form-control" id="pertanyaan" name="content" placeholder="Isi Pertanyaan" value="{{$quest->content}}">
                                </div>
                               
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
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

@endpush


