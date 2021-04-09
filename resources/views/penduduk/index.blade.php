@extends('layouts.app')
@section('content')
<br>
<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Penduduk       </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>nik</th>
                      <th>nama</th>
                      <th>alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                 @foreach($data as $data)
                    <tr>
                      <td>{{$no}}</td>
                        <td><a href="#">{{$data->nik}}</a></td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->alamat}}</td>

                      <td>
                   
                          <a class="btn btn-danger btn-sm" href="/penduduk/{{$data->id}}/delete">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    </tr>
                   @php
                   $no++;
                   @endphp
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

@endsection