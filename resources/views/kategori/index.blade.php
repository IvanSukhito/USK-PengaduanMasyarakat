@extends('layouts.app')
@section('content')
<br>
<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori | <a href="/dashboard/tambah/kategori">Tambah Kategori</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kategori</th>
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
                        <td><a href="#">{{$data->ket_kategori}}</a></td>
                  

                      <td>
                      <a class="btn btn-success btn-sm" href="/kategori/{{$data->id}}/edit">
                              <i class="fas fa-edit">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="/kategori/{{$data->id}}/delete">
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