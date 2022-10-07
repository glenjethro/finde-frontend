@extends('layout.loginlayout')
@section('content')
    <div class="tipe-container" style="margin-top: 50px;">
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
                        <div class="tipe-harga margin-LR">Rp 175.000</div>
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

    <div class="step-base">
        <div style="font-size: 2em; font-weight: bold; color: black; margin: 0 0 50px 0;">Langkah dalam mencari editor video di FindE.</div>
        <div class="step-container">
            <div class="step-content">
                <div class="step-logo">
                    <img src="{{ asset('/storage/cari.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
                <div>1. Cari</div>
                <div style="font-weight: normal; margin-top: 10px;">Cari editor video berdasarkan tipe pencarian</div>
            </div>

            <div class="step-content">
                <div class="step-logo">
                    <img src="{{ asset('/storage/diskusi.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
                <div>2. Diskusi</div>
                <div style="font-weight: normal; margin-top: 10px;">Melakukan diskusi untuk mencapai kesepakatan terkait konsep video yang diinginkan</div>
            </div>

            <div class="step-content">
                <div class="step-logo">
                    <img src="{{ asset('/storage/bayar.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
                <div>3. Bayar</div>
                <div style="font-weight: normal; margin-top: 10px;">Melakukan pembayaran melalui dompet digital atau saldo FindE.</div>
            </div>

            <div class="step-content">
                <div class="step-logo">
                    <img src="{{ asset('/storage/review.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
                <div>4. Memberikan ulasan</div>
                <div style="font-weight: normal; margin-top: 10px;">Melakukan konfirmasi hasil edit video dari editor video dan berikan ulasan</div>
            </div>
        </div>
    </div>
@endsection