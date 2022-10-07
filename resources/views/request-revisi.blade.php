@extends('layout.mainlayout')
@section('content')
    <div class="detail-base" style="padding: 50px 0 10px 0; height: 700px;">
        <div class="detail-container">
            <!-- <div class="flex column align-start">
                <div>Keterangan</div>
                <div style="color: #a1a1a1;">Potongan gambar dan video</div>
            </div> -->

            <div class="flex space-between">
                <div></div>
                <a href="video" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>


            <div style="margin-top: 5px;"></div>

            <!-- <div class="garis-detail"></div> -->

            <div class="ket-container">
                <div class="flex space-between">
                    <div class="flex column align-start">
                        <div>Keterangan Revisi</div>
                        <div style="color: #a1a1a1;">Deskripsi seperti yang sudah ditulis di chat</div>
                    </div>
                    <a href="request-revisi-d" class="detail-btn" style="font-size: 0.8em;">Terima Request Revisi</a>                
                </div>
            </div>
            
            
        </div>
    </div>
@endsection