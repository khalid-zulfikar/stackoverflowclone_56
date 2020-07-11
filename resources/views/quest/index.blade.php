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
                                    <li class="breadcrumb-item"><a href="javascript:">Quest</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="/pertanyaan/create" class="btn btn-primary">Buat Pertanyaan</a>
                                @if (session()->get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> {{session()->get('success')}} </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-block">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Judul</th>
                                                  
                                                    <th style="width: 350px;">Proses</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($quests as $key => $q)
                                            
                                                <tr>
                                                <td> {{$key+1}} </td>
                                                <td> {{$q->title}} </td>
                                               
                                                <td>
                                                    <a href="/quest/{{$q->id}}"><button class="btn btn-sm btn-success"><i class="fas fa-search"></i></button></a>
                                                    <a href="/quest/{{$q->id}}/edit"><button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button></a>
                                                    <form action="/quest/{{$q->id}}" method="POST" style="display: inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                    </form>  
                                                </td>    
                                                </tr>
                                                
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Judul</th>
                                                    <th style="width: 350px;">Proses</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
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

    <!-- data tables js -->
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script src="{{asset('/datta-able/plugins/bootstrap/js/datatables.min.js')}}"></script>

@endpush


