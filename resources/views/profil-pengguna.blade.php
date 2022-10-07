@extends('layout.mainlayout')
@section('content')
    <div class="profil-pengguna-base">
        <div class="aprv-container" style="background-color: transparent;">
            <div class="profil-fotodata" style="margin-top: 50px;">
                <div class="flex space-between" style="width: 100%;">
                    
                    <div class="detail-title black">Profil</div>
                    <a href="./" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
                </div>
            </div>

            <div class="profil-fotodata" style="margin-bottom: 50px;">
                <input type="file" id="profil-pengguna" name="fotoCarousel" multiple hidden/>
                <label class="flex column" for="profil-pengguna" style="width: 100%;">
                <img src="{{ asset('/storage/profile.png') }}" alt="" class="profil-pengguna-foto">
                
                <div class="data-user">
                    <div class="flex">
                        <div class="data-container-1">Nama</div>
                        <div class="data-container-2" style="width: 77%;">Agung</div>
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>

                    <div class="flex">
                        <div class="data-container-1">Alamat email</div>
                        <div class="data-container-2">agung@gmail.com</div>
                    </div>

                    <div class="flex">
                        <div class="data-container-1">Nomor telepon</div>
                        <div class="data-container-2">087877236644</div>
                    </div>

                    <div class="flex space-between" style="width: 100%; margin: 5px 0 0 0;">
                        <div class="detail-title black"></div>
                        <div class="flex" style="width: 100%;">
                            <a href="" class="approve-btn" style="margin: 0; width: 100%;">Simpan</a>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
@endsection