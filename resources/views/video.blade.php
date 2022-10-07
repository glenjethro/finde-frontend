@extends('layout.mainlayout')
@section('content')
    <div class="detail-base" style="padding: 50px 0 10px 0; height: auto;">
        <div class="detail-container">
            <!-- <div class="flex column align-start">
                <div>Keterangan</div>
                <div style="color: #a1a1a1;">Potongan gambar dan video</div>
            </div> -->

            <div class="flex space-between">
                <div></div>
                <a href="detail-video" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="flex space-between">
                <div class="flex column align-start">
                    <div>Keterangan</div>
                    <div style="color: #a1a1a1;">Potongan gambar dan video</div>
                </div>

                <div class="flex">
                <a href="" class="detail-btn" style="font-size: 0.8em; margin: 10px 5px 0 0;">Download Semua</a>
                <a href="request-revisi" class="detail-btn" style="font-size: 0.8em;">Lihat Request Revisi</a>
                </div>
            </div>


            <div style="margin-top: 5px;"></div>

            <!-- <div class="garis-detail"></div> -->

            <div class="ket-container">
                <div class="flex space-between">
                    <div class="flex">
                        <img class="preview" src="{{ asset('/storage/preview.jpg') }}" alt="">
                        <div class="margin-LR">gambar-1.jpg</div>
                    </div>
                    <div class="detail-btn" style="font-size: 0.8em;">Download</div>                
                </div>
            </div>
            
            <div style="margin-top: 5px;"></div>

            <!-- <div class="garis-detail"></div> -->

            <div class="ket-container">
                <div class="flex space-between">
                    <div class="flex">
                        <img class="preview" src="{{ asset('/storage/preview-2.jpg') }}" alt="">
                        <div class="margin-LR">gambar-2.jpg</div>
                    </div>
                    <div class="detail-btn" style="font-size: 0.8em;">Download</div>                
                </div>
            </div>
            
            <div style="margin-top: 5px;"></div>

            <!-- <div class="garis-detail"></div> -->

            <div class="ket-container">
                <div class="flex space-between">
                    <div class="flex">
                        <img class="preview" src="{{ asset('/storage/preview-3.jpg') }}" alt="">
                        <div class="margin-LR">video.mp4</div>
                    </div>
                    <div class="detail-btn" style="font-size: 0.8em;">Download</div>                
                </div>
            </div>
            
            <div style="margin-top: 5px;"></div>

            <div>Klik tombol dibawah untuk melakukan upload hasil edit</div>
            <a class="detail-btn" href="upload">Upload</a>

        </div>
    </div>
@endsection