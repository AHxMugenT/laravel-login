<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>

<body>
    <form action="/profile" method="post">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">{{ auth()->user()->name }}</span>
                        <span class="text-black-50">{{ auth()->user()->email }}</span>
                    </div>
                </div>
                <div class="col-md-7 border-right">
                    <div class="p-3 py-5">
                        <div class="text-center align-items-center mb-3">
                            <h4 class="text-center font-weight-bold">Profile</h4>
                        </div>
                        {{-- {{ dd($user_data) }} --}}
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Nama Lengkap</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" readonly value="{{ auth()->user()->name ?? ''}}">
                                        </div>
                                    </div>
                                </label>
                            </div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Tanggal Lahir</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" readonly value="{{ $user_data->tanggal_lahir ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Usia</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="usia" class="form-control" placeholder="Usia" readonly value="{{ $user_data->usia ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Pekerjaan</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" readonly value="{{ $user_data->pekerjaan ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Jenis Kelamin</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" readonly value="{{ $user_data->jk ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Pendidikan</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" readonly value="{{ $user_data->pendidikan ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Golongan Darah</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="golongan_darah" class="form-control" placeholder="Golongan Darah" readonly value="{{ $user_data->golongan_darah ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">NIK</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="nik" class="form-control" placeholder="NIK" readonly value="{{ $user_data->nik ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Provinsi</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" readonly value="{{ $user_data->provinsi ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Kota/Kabupaten</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="kota_kab" class="form-control" placeholder="Kota/Kabupaten" readonly value="{{ $user_data->kota_kab ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Kecamatan</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="Kecamatan" class="form-control" placeholder="Kecamatan" readonly value="{{ $user_data->kec ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Kelurahan</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" readonly value="{{ $user_data->kel ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels d-flex">
                                    <div class="row">
                                        <div class="col-3">Alamat</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" readonly value="{{ $user_data->alamat ?? '' }}">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 text-center">
                        <a href="/form">
                            <button class="btn btn-dark" type="button">Register Profile</button>
                        </a>
                        <a href="/dashboard">
                            <button class="btn btn-dark" type="button">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</html>
