@extends('layout.loginlayout')
@section('content')
<div class="form-base">
        <div class="form-bg">
            <div class="form-container">
                <div class="sub-form margin-TB" style="font-size: 1.5em;">Punya akun?</div>
                <a class="pilihan-btn" href="login">Login ke FindE</a>

                <div class="error" id="error"></div>

                <div class="garis" style="width: 65%;"></div>

                <div class="font-snk">Dengan mengklik <b>"Daftar"</b>, saya menyetujui <a href="">Syarat dan Ketentuan</a> dan <a href="">Kebijakan Privasi</a> yang berlaku</div>
            </div>

            <div class="form-garis"></div>

            <div class="form-container">
                <div style="color: #a1a1a1;">Daftar dengan <a style="color: #547980; font-weight: bold;" href="">Google</a></div>

                <div class="flex align-center justify-center" style="width: 65%; color: #a1a1a1;">
                    <div class="garis"></div>
                    <div>atau</div>
                    <div class="garis"></div>
                </div>

                <form action="" class="form width-login">
                    <label for="">Nama lengkap</label>
                    <input type="text" name="" id="name" autocomplete="off">

                    <label for="">Alamat email</label>
                    <input type="email" name="" id="email" autocomplete="off">

                    <label for="">Nomor telepon</label>
                    <input type="text" name="" id="phone" autocomplete="off">

                    <label for="">Password</label>
                    <input type="password" name="" id="pass">

                    <!-- <button class="upload-btn" id="btn">Daftar</button> -->
                </form>
                <a class="pilihan-btn" href="./" id="btn">Daftar</a>
            </div>
        </div>
    </div>
@endsection

<script src="../js/register.js"></script>