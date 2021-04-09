@extends('layouts.app')
@section('content')
<br>
<div class="col-md-12">

            <div class="card">
              <div class="card-header">
              <form action="/aspirasimasyarakat">
              <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Search
               <select name="status" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="menunggu">menunggu</option><option value="proses">Proses</option><option value="selesai">Selesai</option></select></label>
                <button type="submit" class="btn btn-primary btn-sm" >Search</button>  | <a href="/aspirasimasyarakat" class="btn btn-danger btn-sm">Reset</a>
              </div></div></div>
          
              </form>
                <h3 class="card-title">Data Aspirasi Masyarakat 
              <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Lokasi Pengaduan</th>
                      <th>Kategori</th>
                      <th>Keterangan</th>
                      <th>Status</th>
                      <th>Feedback</th>
                      <th>Update Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                 @foreach($data as $data)
                    <tr>
                      <td>{{$no}}</td>
                        <td>{{$data->penduduk->nama}}</td>
                        <td>{{ date('d F Y',strtotime($data->created_at)) }}
                        <td><span class="badge bg-danger">{{$data->lokasi}}</span></td>
                        <td>{{$data->kategori->ket_kategori}}</td>
                        <td><b>{{$data->ket}}</b></td>
                        <td>
                        @if($data->status == 'menunggu')
                        <span class="badge bg-warning">Menunggu</span>
                        @elseif($data->status == 'proses')
                        <span class="badge bg-primary">Proses</span>
                        @else
                        <span class="badge bg-success">Selesai</span>
                        @endif

                      
                      <td>
                      @if($data->feedback == null)
                        Belum Ada FeedBack
                      @else
                        <p>{{$data->feedback}}</p>
                      @endif
                      </td>
                      <td>
                      <a class="btn btn-success btn-sm" href="/aspirasi/{{$data->id}}/proses">
                            
                              </i>
                              PROSES
                          </a>
                          <a class="btn btn-danger btn-sm" href="/aspirasi/{{$data->id}}/selesai">
                             
                              </i>
                              SELESAI
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