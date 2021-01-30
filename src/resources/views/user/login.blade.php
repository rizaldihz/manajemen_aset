<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Informasi Manajemen Asset | Unit Pendidikan dan Pelatihan Petrokimia Gresik</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="/assets/css/themes/lite-purple.min.css" rel="stylesheet">
    <link rel="icon" href="/assets/images/sim_asset.png" sizes="16x16" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="auth-layout-wrap" style="background-image: url(/assets/images/bgs.png)">
    <div class="auth-content">
        <div class="card o-hidden col-lg-9 mx-auto">
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="p-4">
                        <div class="text-center mb-4"><img src="/assets/images/logoo.png" alt="" height="80px">
                        </div>
                        <h6 class="text-center px-4">
                            Sistem Informasi Manajemen Asset <br> <strong>Diklat Petrokimia Gresik</strong>
                        </h6>
                        <br>
                        <h3 class="mb-3 mx-3 text-18">Login</h3>
                        <form class="mx-3" action="{{url('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">NIK</label>
                                <input class="form-control form-control-rounded" id="nik" type="text" name="nik">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" id="password" type="password" name="password">
                            </div>
                            <button class="btn btn-rounded btn-primary btn-block mt-4 text-center col-lg-6 mx-auto" type="submit">Login</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>