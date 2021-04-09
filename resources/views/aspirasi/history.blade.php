@extends('layouts.app')
@section('content')
<br>
<div class="col-md-12">

            <div class="card">
              <div class="card-header">
            
                <h3 class="card-title">History Data Aspirasi Masyarakat 
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
                        <span class="badge bg-primary">Selesai</span>
                        @endif

                      
                  
                    </tr>
                   @php
                   $no++;
                   @endphp
                   
                  
                   @endforeach

                  </tbody>
                </table>
               
           
              
              </div>
              <!-- /.card-body -->
              
               
            </div>
            <!-- /.card -->

@endsection