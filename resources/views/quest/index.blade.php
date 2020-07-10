@extends('layouts.temp')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Pertanyaan</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
            <a href="#">
                <button type="submit" class="btn btn-primary">Tambah Category</button>
            </a><br>&nbsp;
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($data as $key => $data)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$data->title}}</td>
                    
                      <td>
                        
                        <a href="/pertanyaan/{{$data->id}}"><button class="btn btn-sm btn-success"><i class="fas fa-search"></i></button></a>
                        <a href="/pertanyaan/{{$data->id}}/edit"><button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button></a>
                        <form action="/pertanyaan/{{$data->id}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                      
                    </tr>
                   @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection