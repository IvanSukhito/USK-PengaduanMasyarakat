
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Aplikasi Pengaduan Masyarakat</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/cover.css')}}" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
        <h3 class="masthead-brand"> <a class="nav-link" href="/login">Pengaduan Masyarakat</a></h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/history/riwayat">Riwayat</a>
           
          </nav>
        </div>
      </header>

      @if(Session::get('sukses'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
										
                            {{ Session::get('sukses')}}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
                         
                            @endif

      <main role="main" class="inner cover">
      
      <b>Riwayat Laporan dan Beri FeedBack</b>
        <br>
      <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID Laporan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id_laporan}}</th>
      <td>{{$data->kategori->ket_kategori}}</td>
      <td>{{$data->lokasi}}</td>
      <td>{{$data->ket}}</td>
      <td>
      <a href="/riwayat/{{$data->id}}/aspirasi"  style="font-weight:bold; color:white;bold;"class="btn btn-primary">Beri FeedBack</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@Ivan Sukhito</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('admin/bootstrap/assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('admin/bootstrap/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  </body>
</html>
