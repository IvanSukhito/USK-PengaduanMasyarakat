
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/cover.css')}}" rel="stylesheet">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
          crossorigin="anonymous"/>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand"><a href="/">Home</a></h3>
         
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
     
    

<body class="hold-transition register-page" >
<div class="register-box" style="width:500px;">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>Form Pengaduan</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Berikan Feedback</p>


        <form method="post"  action="/riwayat/{{$data->id}}/feedback">
                @csrf
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
										
                      <b>
                      @if($data->status == 'menunggu')
                      Laporan masih menunggu
                      @elseif($data->status == 'proses')
                      Laporan sedang diproses
                      @else
                      Laporan Sudah Selesai Diproses
                      @endif</b>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                          value="{{$data->penduduk->nama}}"
                           placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

               
         
                      <div class="input-group mb-3">
                      Lokasi
                    <textarea name="lokasi"placeholder="..." style="width:1000px;">
                    {{$data->lokasi}}
                    </textarea>
                   
                </div>
                <div class="input-group mb-3">
                      Keterangan
                    <textarea name="ket"placeholder="..." style="width:1000px;">
                    {{$data->ket}}
                    </textarea>
                   
                </div>
                
                <div class="input-group mb-3">
                <a href="#">FeedBack</a> &nbsp;
                <div>
                <input type="checkbox" name="feedback" value="puas">Puas</input>
                <input type="checkbox" name="feedback" value="kurang puas">Kurang Puas</input>
                </div>
                  
                    @error('alamat')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
             <input type="hidden" value="{{$data->status}}" name="status"></input>
                <div class="row">
                
                   

                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

     
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

</body>

              
                
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
