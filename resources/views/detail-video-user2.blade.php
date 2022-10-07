@extends('layout.mainlayout')
@section('content')
    <div class="detail-base">
        <div class="detail-container">
            <div class="flex space-between">
                <div class="detail-title black">Detail Pesanan</div>
                <a href="./" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="ket-container">
                <div class="flex space-between">
                    <div>ID Pesanan</div>
                    <div style="color: #a1a1a1;">4</div>
                </div>

                <div class="flex space-between">
                    <div>Pelanggan</div>
                    <div style="color: #a1a1a1;">Glenaldo</div>
                </div>

                <div class="flex space-between">
                    <div>Editor</div>
                    <div style="color: #a1a1a1;">Jethro</div>
                </div>

                <div class="flex space-between">
                    <div>Tanggal Pesanan</div>
                    <div style="color: #a1a1a1;">15 Mei 2022</div>
                </div>

                <div class="flex space-between">
                    <div>Status Pesanan</div>
                    <div style="color: #a1a1a1;">Sudah Terkirim</div>
                </div>
            </div>

            <a class="detail-btn" href="video2">Lihat Video</a>
            <!-- <div style="color: red; font-size: 0.9em; text-align: center;">Hasil Edit Dikirim Sebelum 16 Mei 23:59</div> -->
        </div>


        <!-- DETAIL BAYAAR -->
        <div class="detail-container">
            
            <!-- <div class="garis-detail"></div> -->

            <div class="ket-container">
                <div class="flex space-between">
                    <div style="font-weight: bold;">Total Dibayar Pengguna Jasa</div>
                    <div style="font-weight: bold;">Rp 75.000</div>
                </div>

                <div class="flex space-between">
                    <div>Tanggal Pembayaran</div>
                    <div style="color: #a1a1a1;">15 Mei 2022</div>
                </div>
            </div>
        </div>        
    </div>
@endsection