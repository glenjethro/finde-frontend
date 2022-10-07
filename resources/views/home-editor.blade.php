@extends('layout.editorlayout')
@section('content')
    <div class="home-container">
        <div class="home-name">
            <div class="fotonama-chat">
                <br>
                <img class="foto-home" src="{{ asset('/storage/profil.jpg') }}" alt="">
                <div class="margin-LR white" style="font-weight: bold;">Jethro</div>
            </div>
        </div>

        <!-- <div class="garis-vertical"></div> -->

        <div class="dashboard-container">
            <div class="home-dashboard">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="dash-text">Saldo</div>
                        <div class="dash-text-b">Rp 120.000</div>
                    </div>

                    <a class="dash-btn" href="detail-saldo">Detail</a>
                </div>
            </div>

            <div class="home-dashboard" style="margin-right: 0;">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="dash-text">Total Rating</div>
                        <div class="dash-text-b">4.5</div>
                    </div>

                    <a class="dash-btn" href="detail-rating">Detail</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="pengumuman-container">
        <div class="title-title white margin-TB width-70">Pesanan Saat Ini</div>
        <div class="pesanan-current">
            <a class="pesanan-content" href="detail-pesanan">
                <img src="{{ asset('/storage/profile.png') }}" alt="" class="rating-foto">
                <div class="flex space-between" style="width: 100%;">
                    <div class="flex column align-start">
                        <div class="pengumuman-title">Glenaldo</div>
                        <div class="pengumuman-date">15 Mei 2022</div>
                    </div>

                    <div class="pengumuman-date">ID Pesanan: 4</div>
                </div>

                <a class="chat-btn" href="diskusi">Chat</a>
            </a>
        </div>

        <!-- pesanan selesai -->
        <div class="title-title white margin-TB width-70">Pesanan Selesai</div>
        <div class="pengumuman">
            <a class="pengumuman-content" href="detail-pesanan">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="pengumuman-title">Brando Randy</div>
                        <div class="pengumuman-date">11 Mei 2022</div>
                    </div>

                    <div class="pengumuman-date">ID Pesanan: 3</div>
                </div>
            </a>

            <a class="pengumuman-content" href="detail-pembayaran">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div class="pengumuman-title">Juned</div>
                        <div class="pengumuman-date">6 Mei 2022</div>
                    </div>

                    <div class="pengumuman-date">ID Pesanan: 2</div>
                </div>
            </a>
        </div>
    </div>
@endsection