@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<!-- ============ Body content start ============= -->

<div class="breadcrumb">
    <h1>Profile</h1>
</div>
<!--  end of col -->
<div class="col-xs-12">
    <div class="card card-profile-1 mt-3 mb-4">
        <div class="card-body text-center py-4">
            <div class="avatar box-shadow-2 mb-4"><img src="{{asset('assets/images/1.jpg')}}" alt="" /></div>
            <h4 class="m-0 text-20">{{session()->get('user')->nama}}</h4>
            <p class="mt-0 text-16">{{session()->get('user')->unit_kerja}}</p>
            <br>
            <a class="card-link mb-2 text-18" href="edit_profile.html">Edit Profile <i class="i-Add-User"></i></a> <br><br>
            <form method="post" action="{{url('logout')}}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary btn-rounded px-4 mb-2 text-18">Log Out</button>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

<!-- fotter end -->
</div>
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script src=" {{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/sweetalert.script.min.js')}}"></script>
@endsection