@extends('layout.adminlayout-login')
@section('content')
    <div class="form-base" >
        <div class="form-bg" >
            <div class="form-container">
                <div class="admin-title">FindE</div>
                
                <div class="flex align-center justify-center" style="width: 65%; color: #a1a1a1;">
                    <div class="garis"></div>
                </div>

                <form action="" class="form width-login">
                    <label for="">Username</label>
                    <input type="email" name="" id="email" autocomplete="off">
                    <label for="">Password</label>
                    <input type="password" name="" id="pass">

                </form>
                <a class="pilihan-btn" href="home-admin" id="btn">Login</a>
            </div>
        </div>
    </div>
@endsection

<script src="../js/register.js"></script>