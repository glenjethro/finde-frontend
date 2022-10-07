@extends('layout.mainlayout')
@section('content')
    <div class="detail-base2">
        <div class="detail-container">
            <div class="flex space-between">
                <div></div>
                <a href="detail-video-user2" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="ket-container flex column align-start">
                <div>Keterangan</div>
                <div style="color: #a1a1a1;">Berikut hasil edit video nya</div>
            </div>

            <div class="flex column justify-center">
                <img class="preview2" src="{{ asset('/storage/preview.jpg') }}" alt="">
                <div>Klik pada video untuk memutar video</div>
                <div>edit.mp4</div>
            </div>
            
            <a class="detail-btn" href="form-revisi">Request Revisi</a>
            <a class="detail-btn" href="rating">Konfirmasi Pesanan Selesai</a>             
        </div>
    </div>
@endsection