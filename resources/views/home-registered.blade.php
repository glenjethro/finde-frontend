@extends('layout.registeredlayout')
@section('content')
    <div class="home-container" style="height: 300px;">
        <div class="home-name">
            <div class="fotonama-chat">
                <img class="foto-home" src="{{ asset('/storage/profile.png') }}" alt="">
                <div class="margin-LR white" style="font-weight: bold;">Glenaldo</div>
            </div>
        </div>

        <!-- <div class="garis-vertical"></div> -->

        <div class="flex column">
            <div class="home-dashboard" style="width: 150%; margin: 10px 0;">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="dash-text">Saldo</div>
                        <div class="dash-text-b">Rp 120.000</div>
                    </div>

                    <div>
                        <a class="dash-btn" href="detail-saldo">Detail</a>
                        <!-- <a class="dash-btn" href="" style="margin-left: 0;">Top-up</a> -->
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="tipe-container">
        <div class="tipe-titleTop">
            <div class="banner-layout">
                <div class="tipe-banner" >Cari</div>
                <div class="tipe-banner" >Editor</div>
                <div class="tipe-banner" >Videomu</div>
                <div class="tipe-banner" >Sekarang!</div>
            </div>
        </div>

        <div class="tipe">
            <div class="tipe-content normal" style="margin-bottom: 0;">
                <div>
                    <div class="tipebanner-container">
                        <div class="tipe-title margin-LR">Normal</div>
                        <div class="tipe-harga margin-LR">Rp 75.000</div>
                    </div>

                    <div class="tipe-isi margin-LR">• Waktu pengerjaan 1 hari</div>
                    <div class="tipe-isi margin-LR">• Durasi video 1 menit (kualitas video full HD)</div>
                    <div class="tipe-isi margin-LR">• Revisi pertama gratis, untuk revisi kedua dan selanjutnya akan diberikan charge</div>
                    <div class="tipe-isi margin-LR" style="font-size:0.8em;">*Revisi tidak boleh mengubah alur atau konsep video</div>
                </div>

                <div class="cari-editor margin-all">
                    <a class="cari-btn" href="pencarian">CARI EDITOR</a>    
                </div>
            </div>

            <div class="tipe-content premium">
                <div>
                    <div class="tipebanner-container">
                        <div class="tipe-title margin-LR">Premium</div>
                        <div class="tipe-harga margin-LR">Rp 125.000</div>
                    </div>      

                    <div class="tipe-isi margin-LR">• Editor video dengan sertifikasi</div>
                    <div class="tipe-isi margin-LR">• Waktu pengerjaan 1-2 hari</div>
                    <div class="tipe-isi margin-LR">• Durasi video 1-5 menit (kualitas video full HD)</div>
                    <div class="tipe-isi margin-LR">• Revisi pertama gratis, untuk revisi kedua dan selanjutnya akan diberikan charge</div>
                    <div class="tipe-isi margin-LR" style="font-size:0.8em;">*Revisi tidak boleh mengubah alur atau konsep video</div>
                </div>
                
                <div class="cari-editor margin-all">
                    <a class="cari-btn" href="pencarian">CARI EDITOR</a>    
                </div>
            </div>
        </div>
    </div>

    <!-- pesanan saat ini -->
    <div class="pengumuman-container" style="background-color: #a8bbbf; width: 100%;">
        <div class="title-title white margin-TB" style=" width: 50%;">Pesanan Saat Ini</div>
        <div class="pesanan-current" style="width: 50%;">

            <a class="pesanan-content" href="detail-video-user">
                <img src="{{ asset('/storage/profil.jpg') }}" alt="" class="rating-foto">
                <div class="flex space-between" style="width: 100%;">
                    <div class="flex column align-start">
                        <div class="pengumuman-title">Jethro</div>
                        <div class="pengumuman-date">15 Mei 2022</div>
                    </div>

                    <div class="pengumuman-date">ID Pesanan: 4</div>
                </div>

                <a class="chat-btn" href="diskusi">Chat</a>
            </a>
        </div>

        <!-- pesanan selesai -->
        <div class="title-title white margin-TB" style=" width: 50%;">Pesanan Selesai</div>
        <div class="pengumuman" style="width: 50%;">
            <a class="pengumuman-content" href="./">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="pengumuman-title">Luthfi</div>
                        <div class="pengumuman-date">15 Mei 2022</div>
                    </div>

                    <div class="pengumuman-date">ID Pesanan: 1</div>
                </div>
            </a>
        </div>
    </div>
@endsection