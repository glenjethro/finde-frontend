@extends('layout.editorlayout')
@section('content')
    <div class="home-container">
        <div class="home-name">
            <div class="fotonama-chat">
                <img class="foto-home" src="{{ asset('/storage/profile.png') }}" alt="" style="width: auto;">
                <div class="margin-LR white" style="font-weight: bold;">Nama pengguna</div>
            </div>
        </div>

        <!-- <div class="garis-vertical"></div> -->

        <div class="dashboard-container">
            <div class="home-dashboard">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="dash-text">Saldo</div>
                        <div class="dash-text-b">Rp 300.000</div>
                    </div>

                    <a class="dash-btn" href="">Detail</a>
                </div>
            </div>

            <div class="home-dashboard" style="margin-right: 0;">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="dash-text">Total Rating</div>
                        <div class="dash-text-b">4.8</div>
                    </div>

                    <a class="dash-btn" href="">Detail</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="pengumuman-container">
        <div class="title-title white margin-TB width-70">Pesanan Saat Ini</div>
        <div class="pengumuman">
            <div>Tidak ada pesanan berlangsung</div>
        </div>
    </div>
@endsection