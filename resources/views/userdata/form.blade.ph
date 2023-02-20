<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOREFINE | Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body class="hold-transition login-page bg-dark">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="gambar text-center ">
                    <img src="/admin/assets/img/simpson.jpeg" class="rounded-circle" alt="" width="75"
                        height="75">
                </div>
                <div class="login-logo text-dark fw-semibold fst-italic">
                    <b>Data Diri</a>
                </div>
                <div class="form-group row">
                    <form action="/profile" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->name }}">
                        <div class="input-group mb-1">
                            <input type="text" name="name" class="form-control" placeholder="" value="{{ auth()->user()->name }}"
                                autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <input type="date" name='tanggal_lahir' class="form-control" placeholder="Tanggal Lahir" autocomplete="off">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-heartbeat"></span>
                              </div>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <input type="text" name='usia' class="form-control" placeholder="Usia" autocomplete="off">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-heartbeat"></span>
                              </div>
                            </div>
                        </div>
                          <div class="input-group mb-1">
                            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" autocomplete="off">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-briefcase"></span>
                              </div>
                            </div>
                          </div>
                          <div class="input-group mb-1">
                              <select class="form-control" name="jk" id="">
                                  <option value="">Pilih Jenis Kelamin</option>
                                  <option value="L">Laki - Laki</option>
                                  <option value="P">Perempuan</option>
                              </select>
                              <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-arrow-down"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="input-group mb-1">
                            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" autocomplete="off">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-briefcase"></span>
                              </div>
                            </div>
                          </div>
                          <div class="input-group mb-1">
                              <select class="form-control" name="golongan_darah" id="">
                                  <option value="">Pilih Golongan Darah</option>
                                  <option value="A">A</option>
                                  <option value="AB">AB</option>
                                  <option value="B">B</option>
                                  <option value="O">O</option>
                              </select>
                              <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-arrow-down"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="input-group mb-1">
                              <input type="text" name="nik" class="form-control" placeholder="NIK" autocomplete="off">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-address-card"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-1">
                              <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" autocomplete="off">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-globe"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-1">
                              <input type="text" name="kota_kab" class="form-control" placeholder="Kota/Kabupaten" autocomplete="off">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-globe"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-1">
                              <input type="text" name="kec" class="form-control" placeholder="Kecamatan" autocomplete="off">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-globe"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-1">
                              <input type="text" name="kel" class="form-control" placeholder="Kelurahan" autocomplete="off">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-globe"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                  <textarea type="text" name="alamat" class="form-control"  placeholder="Alamat" autocomplete="off"></textarea>
                              </div>
                          </div>
                        <div class="row">
                            <div class="col mb-3">
                                <button type="submit" class="btn btn-dark btn-block">Confirm</button>
                            </div>
                        </div>
                </div>
                <p class="mb-0">
                    <a href="/dashboard" class="text-center">Back to Home</a>
                </p>
                </form>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/admin/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/assets/js/adminlte.min.js"></script>
    <script>
        scr = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    </script>
</body>

</html>
