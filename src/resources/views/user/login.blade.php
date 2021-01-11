<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Informasi Manajemen Asset | Unit Pendidikan dan Pelatihan Petrokimia Gresik</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/themes/lite-purple.min.css')}}" rel="stylesheet">
</head>
<div class="auth-layout-wrap" style="background-image: url(images/bg3.jpg)">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-4">
                        <div class="text-center mb-4"><img src="{{asset('assets/images/logoo.png')}}" alt="" height="80px">
                        </div>
                        <h5 class="text-center px-4">
                            Sistem Informasi Manajemen Asset <br> <strong>Diklat Petrokimia Gresik</strong>
                        </h5>
                        <br>
                        <h1 class="mb-3 mx-3 text-18">Login</h1>
                        <form class="mx-3" action="{{url('login')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">NIK</label>
                                <input class="form-control form-control-rounded" id="nik" type="text" name="nik">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" id="password" type="password" name="password">
                            </div>
                            <button class="btn btn-rounded btn-primary btn-block mt-4 d-flex justify-content-center text-center" type="submit">Login</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a class="text-muted" href="">
                                Belum punya akun? <br> <strong>Daftar Sekarang!!!</strong</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>