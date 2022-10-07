@extends('layout.adminlayout')
@section('content')
    <div class="aprv-base">
        <div class="menu-admin">
            <a class="menu-container" href="home-admin">Home</a>
            <a class="menu-container" href="">Keuangan</a>
            <a class="menu-container" href="">Daftar Pengguna</a>
            <a class="menu-container" href="">Daftar Editor Video</a>
        </div>

        <div class="aprv-container">
            <div class="aprv-fotodata" style="margin-top: 50px;">
                <div class="flex space-between" style="width: 100%;">
                    <div class="detail-title black">Form Approval Editor</div>
                    <a href="home-admin" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
                </div>
            </div>

            <div class="aprv-fotodata" style="margin-bottom: 50px;">
                <img src="{{ asset('/storage/profile.png') }}" alt="" class="aprv-foto">
                <div class="data-user">
                    <div class="flex">
                        <div class="data-container-1">ID User</div>
                        <div class="data-container-2">1</div>
                    </div>

                    <div class="flex">
                        <div class="data-container-1">Nama</div>
                        <div class="data-container-2">Agung</div>
                    </div>

                    <div class="flex">
                        <div class="data-container-1">Alamat email</div>
                        <div class="data-container-2">agung@gmail.com</div>
                    </div>

                    <div class="flex">
                        <div class="data-container-1">Nomor telepon</div>
                        <div class="data-container-2">087877236644</div>
                    </div>

                    <div class="flex column align-start" style="margin-top: 10px;">
                        <div class="data-container-1" style="width: 100%;">Foto selfie dengan KTP</div>
                        <div class="selfie-container">
                            <!-- <img src="{{ asset('/storage/selfie.jpg') }}" alt=""> -->
                            <img src="{{ asset('/storage/selfie-ktp-2.png') }}" alt="">
                        </div>
                    </div>

                    <div class="flex space-between" style="width: 100%; margin: 5px 0 0 0;">
                        <div class="detail-title black"></div>
                        <div class="flex">
                            <a href="" class="approve-btn">Approve</a>
                            <a href="" class="reject-btn">Reject</a>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
@endsection