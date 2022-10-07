@extends('layout.mainlayout')
@section('content')
    <div class="notif-base">
        <div class="notif-container">
            <div class="flex space-between">
                <div class="detail-title black">Notifikasi</div>
                <a href="home-editor" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="msg-container">
                <div class="flex" style="width: 80%;">
                    <div class="msg-detail">
                        <b style="color: #f49302;">FindE Admin</b>
                        <div style="font-size: 0.9em;">Pendaftaran sebagai editor video sudah kami approve, sekarang kamu bisa mengakses halaman home editor. Terima kasih.</div>
                    </div>
                </div>

                <div style="font-size: 0.9em;">10 Juni 2022, 14:27</div>
            </div>

            <div class="msg-container">
                <div class="flex" style="width: 80%;">
                    <div class="msg-detail">
                        <b style="color: #00b33c;">Pesanan (ID Pesanan: 2)</b>
                        <div style="font-size: 0.9em;">Status: Pesanan Selesai</div>
                    </div>
                </div>

                <div style="font-size: 0.9em;">12 Mei 2022, 14:27</div>
            </div>
            
            <div class="msg-container">
                <div class="flex" style="width: 80%;">
                    <div class="msg-detail">
                        <b style="color: #f49302;">FindE Admin</b>
                        <div style="font-size: 0.9em;">Selamat datang di website kami!</div>
                    </div>
                </div>

                <div style="font-size: 0.9em;">1 Mei 2022, 11:20</div>
            </div>

            <div class="flex space-between">
                <div class="detail-title black"></div>
                <div href="home-editor" style="color: #a1a1a1; margin: 0 5px 0 0; font-size: 1em;">< 1 ></div>
            </div>
        </div>
    </div>
@endsection